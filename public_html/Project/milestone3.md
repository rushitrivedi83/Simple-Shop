<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 Shop Project</td></tr>
<tr><td> <em>Student: </em> Rushi Trivedi(rat3)</td></tr>
<tr><td> <em>Generated: </em> 5/2/2022 11:46:52 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone-3-shop-project/grade/rat3" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone3 branch </li>
<li>Create a new markdown file called milestone3.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone3.md link (from Milestone3) into the proposal.md file under each milestone3 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone3.md</li>
<li>Add/commit/push the changes to Milestone3</li>
<li>PR Milestone3 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes to get ready for Milestone 4</li>
<li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on GitHub and everywhere else.
Images are only accepted from dev or prod, not localhost.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User will be able to purchase their cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Orders table with valid data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/166399626-08b44299-3a8b-4bec-838c-ac3e20bb7dfc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the Orders table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of OrderItems table with validate data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/166399647-e34b6bd5-fe27-458a-8b1f-54b696eec844.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of OrderItems table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the purchase form UI from Heroku</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/166399664-03242813-ef5a-4f88-8d95-5ed1bd0c969e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the purchase form UI from Heroku dev instance<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the purchase validation code (ensure your ucid and date are included) (Payment method, purchase value, shipping info)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/166400155-72da4571-a0e8-46b1-9969-d11174f9b73f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the purchase validation code for payment method, purchase value, and shipping<br>info UI from Heroku dev instance. I basically made it so if any<br>of those fields are empty then there is a generic message saying please<br>fill out all the necessary fields<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a screenshot showing the Order Process validations from the UI (Price check, Quantity/Stock check)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/166400366-c4f9b08e-5047-41d1-a7fe-b94daba6b0ce.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the Quantity/Stock check Order Process validations from the UI <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/166400522-4cb679fe-2079-4389-aea4-1a108c270c4f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the Price Check Order Process validations from the UI <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/166400583-470aded1-ae08-4091-a5f6-a2a95ebcdc73.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Code portion of it always taking the price of the current Product when<br>calculating the purchase amount and not the moment it was put in the<br>cart. You can see the sql statement, how it joins the products table<br>and uses that unit price to determine the subtotal for that item. <br><br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly describe the code flow/process of the purchase process</td></tr>
<tr><td> <em>Response:</em> <p>For the UI, I used a bootstrap template. So once all the fields<br>is filled out like the address and payment information, it is sent to<br>a js front-end validation to make sure there is value for all. If<br>there is value for all, it will make a post request to itself,<br>and from there PHP code will handle it. So for the php code,<br>before the post request basically on page load it first joins the cart<br>table, with products table to get the desired_quantity and quantity, to make the<br>check whether the amount is over the stock limit of not. Then for<br>post request it also does a transaction where we can revert at any<br>time. In this query it does the same thing and gets all the<br>necessary columns from the cart and products and joins them together. Once there<br>it tries to deduct the product stock, and since we had a less<br>than 0 validation, we use that towards our advantage and if SQL throws<br>that error then we know the desired_quantity is more than stock so we<br>rollback transaction and return and flash an error. After deducting the stocks, we<br>add the entry of the new order to the orders table, most of<br>the fields are derived from the post request and we also merge all<br>the address fields into one, and if there is error in that then<br>we throw error and roll back. Then basically use the cart and map<br>the entire cart to order history while appending the order_id on every insert<br>using JOIN again. Once all that is done, we proceed to clear the<br>user&#39;s cart. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rushitrivedi83/IT202-008/pull/70">https://github.com/rushitrivedi83/IT202-008/pull/70</a> </td></tr>
<tr><td> <em>Sub-Task 8: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rat3-prod.herokuapp.com/Project/order.php">https://rat3-prod.herokuapp.com/Project/order.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Order Confirmation Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot showing the order details from the purchase form and the related items that were purchased with a thank you message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/166401108-6f8495a3-a32e-4a9e-a0fb-56a868c76488.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Order confirmation page screenshot<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how this information is retrieved and displayed from a code logic perspective</td></tr>
<tr><td> <em>Response:</em> <p>The way this is worked, is that for the UI I took a<br>bootstrap template found online. And for the logic, since we have our data<br>split in rows inside the orderItems table, I basically run a query that<br>gets the most recent order of the user since it would make sense<br>that it is the confirmation page it requires for. Then once I get<br>that order id, I basically run a query of that inside the orderItems<br>table to get all the items ordered for that order, and then join<br>with products table for the image and Name. Once I get those, I<br>basically input those values inside a table, which displays the order confirmation page.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rushitrivedi83/IT202-008/pull/71">https://github.com/rushitrivedi83/IT202-008/pull/71</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rat3-prod.herokuapp.com/Project/confirm.php">https://rat3-prod.herokuapp.com/Project/confirm.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User will be able to see their Purchase History </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing purchase history for a user</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/166401281-4dd7a617-cbea-4e60-9a2a-595ebf0035b9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The screenshot of the purchase history for a user that is non admin.<br>You can see in the userid column, you only see the userid of<br>the user that is logged in.  <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing full details of a purchase (Order Details Page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/166401338-273fd1bc-3fe2-4254-af38-e1b35c669148.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The screenshot of the order details page.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the logic for showing the purchase list and click/displaying the Order Details</td></tr>
<tr><td> <em>Response:</em> <p>So for the purchase list, I basically just do a query through our<br>orders table and get all the rows with the user that is logged<br>in and use that table to generate the table which the code was<br>always given to us by the dynamic table. I also add a new<br>column called details, which basically is a button wrapped in a tag, which<br>upon click takes the user to the Order Details page. And for order<br>details page, I used the same logic and format as the confirmation page,<br>but removed all the Thank you messaged. Also to send which order to<br>show, I am sending the userid and orderid as url param, so it<br>can help us load the order details page. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rushitrivedi83/IT202-008/pull/72">https://github.com/rushitrivedi83/IT202-008/pull/72</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rat3-prod.herokuapp.com/Project/purchase_history.php">https://rat3-prod.herokuapp.com/Project/purchase_history.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Store Owner Purchase History </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing purchase history from multiple users</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/166401945-4b7303a8-d2af-4dab-b7db-01b0635ae6b6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The screenshot shows the purchase history from multiple users as u can see<br>from user_id column<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing full details of a purchase (Order Details Page) (from a user that's not the Store Owner)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/166401338-273fd1bc-3fe2-4254-af38-e1b35c669148.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>It is the same Order Details Page as before<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the logic for showing the purchase list and click/displaying the Order Details (mostly how it differs from the user's purchase history feature)</td></tr>
<tr><td> <em>Response:</em> <p>So for the purchase list, I basically just do a query through our<br>orders table and get all the rows in general and use that table<br>to generate the table which the code was always given to us by<br>the dynamic table. I also add a new column called details, which basically<br>is a button wrapped in a tag, which upon click takes the user<br>to the Order Details page. And for order details page, I used the<br>same logic and format as the confirmation page, but removed all the Thank<br>you messaged. Also to send which order to show, I am sending the<br>userid and orderid as url param, so it can help us load the<br>order details page. And the way it differs is that I basically do<br>an if statement that checks user role upon landing on the purchase history<br>page, and from that we develop the query to know which order records<br>to get.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rushitrivedi83/IT202-008/pull/73">https://github.com/rushitrivedi83/IT202-008/pull/73</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rat3-prod.herokuapp.com/Project/purchase_history.php">https://rat3-prod.herokuapp.com/Project/purchase_history.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone3.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/166400898-0da47c47-d43c-4970-82d6-69c2a4656ad5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot part 1 of the checkmart, dates, and link to proposal.md file<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/166400947-22dc392c-d8de-4058-86b3-05669227265f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot part 2 of the checkmart, dates, and link to proposal.md file, and<br>the url for the proposal.md file is <a href="https://github.com/rushitrivedi83/IT202-008/blob/Milestone3/public_html/Project/proposal.md">https://github.com/rushitrivedi83/IT202-008/blob/Milestone3/public_html/Project/proposal.md</a> <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone3 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/166401044-157abd27-6167-4587-9053-234a12041b0c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshots showing which issues are done/closed (project board) <br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone-3-shop-project/grade/rat3" target="_blank">Grading</a></td></tr></table>