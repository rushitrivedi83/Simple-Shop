<script>
	function get_cart() {
        postData({}, "/Project/api/get_cart.php").then(data => {
            console.log(data);
            let carts = document.getElementsByClassName("cart");
            let table = document.createElement("table");
            table.className = "table card-table";
            let h = document.createElement("thead");
            h.innerHTML =
                `
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Cost</th>
                    <th>Subtotal</th>
                    <th></th>
                    `;
            table.appendChild(h);
            let body = document.createElement("tbody");
            if (data.data) {
                let total = 0;
                for (let r of data.data) {
                    //name, c.id as line_id, item_id, quantity, cost, (cost*quantity) as subtotal
                    let row = document.createElement("tr");
                    total += parseFloat(r.subtotal);
                    row.innerHTML =
                        `
                        <td>
                        ${r.name}
                        </td>
                        <td style="width:100px">
                            <input class="form-control quantityChange" onfocusout = "changeQuantity(${r.line_id}, this)" type="text" value="${r.desired_quantity}"></input>
                        
                        </td>
                        <td>
                        $${ parseFloat(r.unit_price).toFixed(2) }
                        </td>
                        <td>
                        $${ parseFloat(r.subtotal).toFixed(2)}
                        </td>
                        <td>
                            <button class="btn btn-danger" onclick="deleteLineItem(${r.line_id}, this)">x</button>
                        </td>
                        `;
                    body.appendChild(row);
                }
                let row = document.createElement("tr");
                row.innerHTML =
                    `
                <td colspan="100%">
                Total: ${total.toFixed(2)}
                </td>
                `;
                body.appendChild(row);
                row = document.createElement("tr");
                row.innerHTML =
                    `
                <td colspan="100%">
                <button class="btn btn-primary" onclick="checkout()">Checkout</button>
                <button class="btn btn-secondary" onclick="deleteEntireCart()">Clear Cart</button>
                </td>
                `;
                body.appendChild(row);
                table.appendChild(body);
                for (let cart of carts) {
                    cart.innerHTML = "";
                    cart.appendChild(table);
                }
            } else {
                let row = document.createElement("tr");
                row.innerHTML =
                    `
                <td colspan="100%">
                No items in cart
                </td>
                `;
                for (let cart of carts) {
                    cart.innerHTML = "";
                    cart.appendChild(table);
                }
            }
        })
    }

    function deleteLineItem(line_id, ele) {
        console.log("delete ele", ele);
        postData({
            line_id: line_id
        }, "/Project/api/delete_cart_row.php").then(data => {
            console.log(data);
            //lazily assuming it worked and removing from the DOM
            //you'd ideally want to check to be sure if using a similar process
            //ele.closest("tr").remove();
            //turns out since I have total shown I need to recalculate that, and I'm lazy so instead...
            //I'll refresh the full cart
            if (get_cart) {
                get_cart();
            }
        });
    }

    function changeQuantity (line_id, ele) {
        var changedQuantity = ele.value;
        console.log("Value for row " + line_id + " changed to " + changedQuantity)

        if(changedQuantity < 0) {
            flash("Please Select a Quantity > 0", "danger");
            if (get_cart) {
                get_cart();
            }
            return

        } if (changedQuantity == 0) {
            deleteLineItem(line_id, ele);
            return
        }
        postData({
            line_id: line_id,
            new_Quantity: changedQuantity
        }, "/Project/api/update_quantity.php").then(data => {
            console.log(data);
            //lazily assuming it worked and removing from the DOM
            //you'd ideally want to check to be sure if using a similar process
            //ele.closest("tr").remove();
            //turns out since I have total shown I need to recalculate that, and I'm lazy so instead...
            //I'll refresh the full cart
            if (get_cart) {
                get_cart();
            }
        });
    }

    function deleteEntireCart() {
        console.log("deleting cart");
        postData({}, "/Project/api/delete_cart.php").then(data => {
            console.log(data);
            if (get_cart) {
                get_cart();
            }
        });
    }

    function checkout() {
        window.location.href = "/Project/order.php"
    }

	function add_to_cart(product_id, quantity = 1) {
        postData({
            product_id: product_id,
            desired_quantity: quantity
        }, "/Project/api/add_to_cart.php").then(data => {
            if (data.status === 200) {
                flash(data.message, "success");
				if (get_cart) {
                    get_cart();
                }
            } else {
                flash(data.message, "danger");
            }
        }).catch(e => {
            console.log(e)
            flash(`There was a problem adding the item to cart ${e}`, "danger");
        });
    }

	get_cart();
</script>

<div class="card">
    <div class="card-body">
        <div class="card-text">
            <div class="h3">Cart</div>
            <div class="cart g-4">
            </div>
        </div>
    </div>
</div>
<style>
    .card-table {
        word-break: break-all;
    }
</style>