<table><tr><td> <em>Assignment: </em> IT202 Milestone 4 Shop Project</td></tr>
<tr><td> <em>Student: </em> Rushi Trivedi(rat3)</td></tr>
<tr><td> <em>Generated: </em> 5/12/2022 8:57:48 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone-4-shop-project/grade/rat3" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone4 branch </li>
<li>Create a new markdown file called milestone4.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone4.md link (from Milestone4) into the proposal.md file under each milestone4 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone4.md</li>
<li>Add/commit/push the changes to Milestone4</li>
<li>PR Milestone4 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes</li>
<li>Submit the direct link to this new milestone4.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on GitHub and everywhere else.
Images are only accepted from dev or prod, not localhost.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User can set their profile to public or private </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of new column on the Users table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/168002853-038d569b-83d1-486c-9913-37542396ab6c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Users table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of updated profile edit view</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/168002790-5c0850f2-e369-49f8-895c-cde3ffa036d0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of updated profile edit view<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of profile view view (ensure email isn't shown publicly)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/168079321-57244bc4-63c3-4384-b7e1-d3bbc3bd0680.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Email isn&#39;t shown when profile is private<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/168079410-a6c1c601-dd17-404f-9a92-e5ccdce08ba8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Email is shown when profile is public<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s) links</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rushitrivedi83/IT202-008/pull/76">https://github.com/rushitrivedi83/IT202-008/pull/76</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add direct link to a public profile from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rat3-dev.herokuapp.com/Project/profile.php">https://rat3-dev.herokuapp.com/Project/profile.php</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic behind how public/private profile works</td></tr>
<tr><td> <em>Response:</em> <p>Basically added another column inside the users table. And based on that we<br>have conditionals that does the following task. For example if the user is<br>the one same as the one logged in then we provide edit button<br>which then shows the edit form. And if the user is public then<br>we show the email, and if the user is private we hide the<br>email column. And for updating part we just added another input element in<br>the previous edit profile form, and did backend logic to support it. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> User will be able to rate a product they purchased </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Ratings table with some data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/167999076-6c2140c1-d1b3-4dae-b0de-3d565f4755f2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the ratings table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of the Product Details page with comments/ratings and the form to add another and the average rating</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/167999243-6520b619-1170-4d3d-b4bd-939f9dee8a82.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of the Product Details page with comments/ratings and the form to add<br>another and the average rating<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of the error message for a user trying to rate/comment that hasn't purchased the product</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/167999357-fae99a74-b3b9-4198-9c30-7d8d43576b23.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of the error message for a user trying to rate/comment that hasn&#39;t<br>purchased the product, but in this case I just removed the button to<br>submit and showed error msg instead.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rushitrivedi83/IT202-008/pull/77">https://github.com/rushitrivedi83/IT202-008/pull/77</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add link to a product details page with ratings/comments</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rat3-dev.herokuapp.com/Project/product.php?id=1">https://rat3-dev.herokuapp.com/Project/product.php?id=1</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic being adding comment/rating and validations</td></tr>
<tr><td> <em>Response:</em> <p>In here I basically added a bootstrap template for rating box as a<br>form on the page which gives the review number and comment. And I<br>also made it so on UI, only if the user purchased the item,<br>he can submit that form and have a check on the backend, that<br>if user didn&#39;t submit the item then their rating wouldn&#39;t go through. So<br>once the user submits, I use the user_id and product id and insert<br>that post message of rating and comment inside the Ratings table. And as<br>for paginate and showing the rating, I just used a query that gets<br>all rating and order desc based on modified and the product_id which we<br>get from url, and then we just loop over them inside a table.<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User's Purchase History Changes </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots demonstrating examples of the filters/pagination applied</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/168000277-6347e854-aacd-4fda-8d70-73bc3b04c0d1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot demonstrating filter/pagination applied to the Purchase History table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rushitrivedi83/IT202-008/pull/80">https://github.com/rushitrivedi83/IT202-008/pull/80</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the purchase history page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rat3-dev.herokuapp.com/Project/purchase_history.php">https://rat3-dev.herokuapp.com/Project/purchase_history.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Store Owner Purchase History Changes </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots demonstrating examples of the filters/pagination applied (ensure the calculated total price is clearly visible)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/168000060-dae56b7a-d004-4605-b880-d35bc4616453.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot demonstrating examples of the filters/pagination applied<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rushitrivedi83/IT202-008/pull/80">https://github.com/rushitrivedi83/IT202-008/pull/80</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the store owner's purchase history page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rat3-dev.herokuapp.com/Project/purchase_history.php">https://rat3-dev.herokuapp.com/Project/purchase_history.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how the total price is calculated based on the filtered/paginated results</td></tr>
<tr><td> <em>Response:</em> <p>For this, it was mostly the sql query. I basically joined the Order_Items<br>with Order and Products, and then I ran the filters using Products.category table<br>within the where clause. And for the sort it was mostly done through<br>the Order table, and used the same or similar logic to the shop<br>page. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Add pagination to Shop and any other product lists not covered </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot(s) of the newly paginated pages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/168000404-cf0ff4a8-3b4d-42ca-b1ef-60899dd7e329.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of paginated shop page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rushitrivedi83/IT202-008/pull/55">https://github.com/rushitrivedi83/IT202-008/pull/55</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add links to related pages</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rat3-dev.herokuapp.com/Project/shop.php">https://rat3-dev.herokuapp.com/Project/shop.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Store Owner will be able to see all products out of stock </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the out of stock results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/168000616-6d5cb7b4-172a-405f-9033-f1a7825875a3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing out of stock results<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rushitrivedi83/IT202-008/pull/78">https://github.com/rushitrivedi83/IT202-008/pull/78</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add links to related page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rat3-dev.herokuapp.com/Project/shop.php?name=&col=unit_price&order=asc&category=all&stock=outofstock">https://rat3-dev.herokuapp.com/Project/shop.php?name=&col=unit_price&order=asc&category=all&stock=outofstock</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain your approach to this view</td></tr>
<tr><td> <em>Response:</em> <p>In here I just added another filter that we can choose from the<br>drop down for out of stock or in stock items, and it is<br>shown based on the user role. If the user role is admin then<br>it will show and if not it won&#39;t. As for filtering part, I<br>just added the initial where clause of only showing items with stock &gt;<br>0 wrapped in an if statement based on the out of stock drop<br>down filter. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User can sort products by average rating on the shop page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing the sort in effect</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/168000940-7feca9e9-10ad-46e2-8031-9c3d02e4c4c1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Average rating sort in effect<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of the Products table (or your implementation/approach to average rating)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/168000999-011eb13d-bc1c-494e-9c8f-8ff144152ff4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the Products Table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rushitrivedi83/IT202-008/pull/79">https://github.com/rushitrivedi83/IT202-008/pull/79</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add links to related page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rat3-dev.herokuapp.com/Project/shop.php?name=&col=avg_rating&order=desc&category=all&stock=inStock">https://rat3-dev.herokuapp.com/Project/shop.php?name=&col=avg_rating&order=desc&category=all&stock=inStock</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain how you implemented the average rating recording logic and how it applies to this sort on sho</td></tr>
<tr><td> <em>Response:</em> <p>In here I basically added a ratings column in products table that shows<br>avg ratings for an user. And this gets updated everytime a user submits<br>a review, and once user submits a review it will automatically calculate the<br>new avg and update it in the Products table. Then after that all<br>I had to do was add that column inside the already existing drop<br>down and let it do its magic. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone4.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/168001857-b9ecf7cc-f05f-4a93-9949-765f47ee7e09.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of updated proposal.md file with checkmarks.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone4 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/168002656-c5a31073-4926-487f-b4d5-8b7418cadfe5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the issues are done/closed<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone-4-shop-project/grade/rat3" target="_blank">Grading</a></td></tr></table>