<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Shop Project</td></tr>
<tr><td> <em>Student: </em> Rushi Trivedi(rat3)</td></tr>
<tr><td> <em>Generated: </em> 4/18/2022 11:06:00 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone-2-shop-project/grade/rat3" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone2 branch </li>
<li>Create a new markdown file called milestone2.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone2.md link (from Milestone2) into the proposal.md file under each milestone2 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone2.md</li>
<li>Add/commit/push the changes to Milestone2</li>
<li>PR Milestone2 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes to get ready for Milestone 3</li>
<li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on github and everywhere else.
Images are only accepted from dev or prod, not local host.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Users with admin or shop owner will be able to add products </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of admin create item page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163812912-93a8e9d5-bef2-417c-87e9-81c63d7d1657.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The screenshot of the admin create item page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of populated Products table clearly showing the columns</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163813038-6639d85f-4fc4-4a0e-aa82-3103c59e7474.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The screenshot of products table in the data base<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163813107-1e450aa5-c689-4fd6-8d62-8774b036897c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The screenshot of the list of all the products for admin page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly describe the code flow for creating a Product</td></tr>
<tr><td> <em>Response:</em> <p>So, the code flow for creating a Project is that first we have<br>a form in the UI. Which on submit, so basically post a request<br>which sends it back to the same page, and php side/server side uses<br>the data from the post request and creates a Insert query which is<br>dynamic and we created a function called savedata in library so we can<br>reuse it any time throughout our code base. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rushitrivedi83/IT202-008/pull/54">https://github.com/rushitrivedi83/IT202-008/pull/54</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://rat3-prod.herokuapp.com/Project/admin/add_item.php">http://rat3-prod.herokuapp.com/Project/admin/add_item.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Any user can see visible products on the Shop Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Shop page showing 10 items without filters/sorting applied</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163816251-df25a4b7-32b9-4d8e-8aa5-8c44be2b06b2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Picture of shop page showing 10 items without filters<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163816373-3a717fc8-7dbe-43f8-a9e0-b0785e370e4b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Continues<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Shop page showing both filters and a different sorting applied (should be more than 1 sample product)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163816451-03f24b54-4e3b-40e6-bcca-371dbc8812ef.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Filter one with category as tech and cost going down<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163816550-d88503bb-1e56-4ee5-a20a-331316f2c731.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Filter two with category as food and cost going up<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the filter/sort logic from the code (ensure ucid and date is shown)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163816825-77569607-84bb-496c-a53b-8a9b9d750d42.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This code basically shows the sort is working<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how the results are shown and how the filters are applied</td></tr>
<tr><td> <em>Response:</em> <p>So the way I did a filter is that I added another drop<br>down called categories which basically sends its own data in the post request<br>with named category. From there the page takes the post request and appends<br>it to the query that was give to us by you by use<br>Where category = :category<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rushitrivedi83/IT202-008/pull/55">https://github.com/rushitrivedi83/IT202-008/pull/55</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://rat3-prod.herokuapp.com/Project/shop.php">http://rat3-prod.herokuapp.com/Project/shop.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Show Admin/Shop Owner Product List (this is not the Shop page and should show visibility status) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of the Admin List page/results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163817623-ede2298a-0d2b-4fe2-947f-b0d66abdc64d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the admin list page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the results are shown</td></tr>
<tr><td> <em>Response:</em> <p>Basically in here I am using the same concept as shop page, however<br>with search criteria and making sure to not add the param of visibility<br>so it can load all the rows despite their visibility status. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rushitrivedi83/IT202-008/pull/56">https://github.com/rushitrivedi83/IT202-008/pull/56</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://rat3-prod.herokuapp.com/Project/admin/list_items.php">http://rat3-prod.herokuapp.com/Project/admin/list_items.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Admin/Shop Owner Edit button </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a sceenshot showing the edit button visible to the Admin on the Shop page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163818072-287cf119-088f-42fa-a7e8-0751f36c7c76.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Edit button on shop page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a sceenshot showing the edit button visible to the Admin on the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163818144-a42c004f-e629-435d-96ef-74dac360a498.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Edit button on product details page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a sceenshot showing the edit button visible to the Admin on the Admin Product List Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163817623-ede2298a-0d2b-4fe2-947f-b0d66abdc64d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Edit button on the Admin Product List Page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a before and after screenshot of Editing a Product via the Admin Edit Product Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163818289-ae23e8de-d1e3-4617-b5c4-a65ecd4ae3b2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163818396-0fb49ec0-ecc0-4128-ac87-7f4a79d51eab.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>In this part, I basically used the dynamic get table values and loop<br>over all the columns inside the database for all products table, and generate<br>the form. To prefill the form values, whichever card/item from list is clicked,<br>I append the id/the row id of the product to the url, which<br>then I use to get its values from the database then as I<br>am looping I input those values inside the table which creating the form.<br>And then once we finish changing, I make a post request of the<br>new data, which gets sent to updateData, and then it use UPDATE SET<br>WHERE to update the item in the DB. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rushitrivedi83/IT202-008/pull/57">https://github.com/rushitrivedi83/IT202-008/pull/57</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://rat3-prod.herokuapp.com/Project/admin/edit_item.php?id=1">http://rat3-prod.herokuapp.com/Project/admin/edit_item.php?id=1</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Product Details Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the button (clickable item) that directs the user to the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163819372-f688f744-174f-4292-92ee-a1bce213b93e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The title itself is an a tag with href which leads user to<br>product details page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the result of the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163818144-a42c004f-e629-435d-96ef-74dac360a498.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Result of Product Details Page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>For the product details page, I used a similar concept to the edit<br>items functionality. Basically when the user clicks the tag with the href to<br>the product details page, I take the id of the element, since that<br>element will have an id of the product related to its row in<br>the DB, and use that to generate a Select query to get all<br>the details of the item. As for the UI, I used same concept<br>of cards, but instead of breaking them into grid, I just made the<br>details one big card, which can display the pictures and all the details<br>necessary for the product. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rushitrivedi83/IT202-008/pull/58">https://github.com/rushitrivedi83/IT202-008/pull/58</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file (can be any specific item)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://rat3-dev.herokuapp.com/Project/product.php?id=3">http://rat3-dev.herokuapp.com/Project/product.php?id=3</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Add to Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the success message of adding to cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163820352-e4a395c7-d7d0-4314-a5f9-edf6ba1f858e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the success message of adding to cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the error message of adding to cart (i.e., when not logged in)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163820407-971450fe-8263-4ccd-9a88-3d24096a8b17.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the error message of adding to cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Cart table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163820534-0b8f7dd6-35a8-40c5-86ff-34180dc8daf2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the cart table with data in it<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Tell how your cart works (1 cart per user; multiple carts per user)</td></tr>
<tr><td> <em>Response:</em> <p>It is 1 cart per user<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Explain the process of add to cart</td></tr>
<tr><td> <em>Response:</em> <p>The process of add to cart is straight forward, so on the shop<br>page there is a buy button on each of the product&#39;s card. And<br>once you click that we send the details of the item to an<br>api called add_to_cart, and from there we get the user id and the<br>cart, and use a Insert query to insert the values into the Cart&#39;s<br>table, but to make our life easier we have a ON Duplicate key<br>constraint which basically upon receiving add to cart of an item already in<br>cart, we increasing the count of the item by 1. And of course<br>we use the same if statement to make sure if user trying to<br>add to cart has an account or not if not we flash an<br>error msg.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rushitrivedi83/IT202-008/pull/59">https://github.com/rushitrivedi83/IT202-008/pull/59</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User will be able to see their Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Cart View (show subtotal, total, and the link to Product Details Page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163820534-0b8f7dd6-35a8-40c5-86ff-34180dc8daf2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> screenshot of the Cart View (show subtotal, total, and the link to<br>Product Details Page)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain how the cart is being shown from a code perspective along with the subtotal and total calculations</td></tr>
<tr><td> <em>Response:</em> <p>So like the calculation part is basically the quantity multiplied by the unit_price<br>of the item, and we do this while we do select statement as<br>we add another column while executing the select statement called subtotal. And the<br>way its being displayed is that it basically creates a request that gets<br>all the item in the cart for the specific user, and then we<br>loop over that query&#39;s result to fill out the table. The way this<br>request is generated is through use of ajax, so the page doesn&#39;t reload<br>after the request. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rushitrivedi83/IT202-008/pull/60">https://github.com/rushitrivedi83/IT202-008/pull/60</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://rat3-prod.herokuapp.com/Project/shop.php">http://rat3-prod.herokuapp.com/Project/shop.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> User can update cart quantity </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show a before and after screenshot of Cart Quantity update</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163820534-0b8f7dd6-35a8-40c5-86ff-34180dc8daf2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163821059-8e9a8891-9726-40cc-a804-94e0f405e12b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show a before and after screenshot of setting Cart Quantity to 0</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163821059-8e9a8891-9726-40cc-a804-94e0f405e12b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>BEFORE<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163821122-a3d051bb-438a-44d4-9351-8fa0ce21dad8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>AFTER<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Show how a negative quantity is handled</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163821272-8fac4e04-953b-4bb7-903e-655f9146ce28.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Negative quantity is handled<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain the update process including how a value of 0 and negatives are handled</td></tr>
<tr><td> <em>Response:</em> <p>So basically the way I did for value of 0, so if the<br>user inputted zero, I invoke the api call delete_cart_row and send in the<br>row that the user just inputted 0 in. This call basically gets the<br>row index, and does a delete query on the table. On the other<br>hand for negative, on the function which handles the input, I made it<br> when user tries to input negative it flashes a message saying quantity<br>has to be &gt; 0. And the update, I made a new update<br>api called update_quantity, which takes in row_id and the quantity since it gets<br>the user id from the session. Then we basically use those details to<br>begin the update query to set the row&#39;s desired_quantity to be what they<br>value of the post call. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rushitrivedi83/IT202-008/pull/63">https://github.com/rushitrivedi83/IT202-008/pull/63</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Cart Item Removal </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a before and after screenshot of deleting a single item from the Cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163821365-b405eda5-e509-40c5-8252-c52cf406bf65.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163821404-f1700eaa-1af1-4f89-8d00-1910614eb674.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a before and after screenshot of clearing the cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163821404-f1700eaa-1af1-4f89-8d00-1910614eb674.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163821469-2194b249-6600-4e04-9011-e6d7475dc0d9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how each delete process works</td></tr>
<tr><td> <em>Response:</em> <p>For the delete process I had 2 api calls, one of which is<br>delete by row, and delete entire cart. For the delete by row, I<br>basically use the post request to send the row_id, which then I use<br>to conduct my delete query on the Carts table. However, for the entire<br>cart, I just send it nothing, and basically do a delete query on<br>the carts table where user_id = the user id of the user that<br>clicked the button. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <em>Response:</em> <p><a href="https://github.com/rushitrivedi83/IT202-008/pull/61">https://github.com/rushitrivedi83/IT202-008/pull/61</a><br><a href="https://github.com/rushitrivedi83/IT202-008/pull/62">https://github.com/rushitrivedi83/IT202-008/pull/62</a><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 10: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone1.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163825475-b06c0e3a-128c-4c74-8e43-785736fb1390.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Part 1 of the updatss<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163825611-33f3e15c-1826-488a-8c39-06b27c640124.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Part 2 Updates<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/163821681-ecc28653-bf76-4cd3-a87e-b436a57b2c41.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshots showing which issues are done/closed (project board) Incomplete Issues should not be<br>closed (Milestone2 issues)<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone-2-shop-project/grade/rat3" target="_blank">Grading</a></td></tr></table>