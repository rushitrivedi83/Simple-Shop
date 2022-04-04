<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Rushi Trivedi(rat3)</td></tr>
<tr><td> <em>Generated: </em> 4/3/2022 8:41:14 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone1-deliverable/grade/rat3" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone1 branch</li>
<li>Create a milestone1.md file in your Project folder</li>
<li>Git add/commit/push this empty file to Milestone1 (you&#39;ll need the link later) </li>
<li>Fill in the deliverable items<ol>
<li>For the proposal.md file use the direct link to milestone1.md from the Milestone1 branch for all of the features  </li>
<li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e, <a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li>
</ol>
</li>
<li>Ensure your images display correctly in the sample markdown at the bottom</li>
<li>Save the submission items</li>
<li>Copy/paste the markdown from the &quot;Copy markdown to clipboard link&quot;</li>
<li>Paste the code into the milestone1.md file</li>
<li>Git add/commit/push the md file to Milestone1</li>
<li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li>
<li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol>
<li>Make sure everything looks ok on heroku</li>
</ol>
</li>
<li>Make a pull request from dev to prod (resolve any conflicts) <ol>
<li>Make sure everything looks ok on heroku</li>
</ol>
</li>
<li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li>
</ol>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/161451005-8c75a837-33a4-4a81-bd1d-393d10eefce7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>In this screenshot, I am showing the screenshot of the registration Page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/161451109-bb6db2ec-6235-4a9e-a9ac-92fb101f1f7b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>In this screenshot, I am showing the screenshot registration Page with validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/161451134-7ffeda14-9d42-4b9c-897e-5017bb6e1425.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is a successfully User created page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/161451172-9bf2822a-bea0-4f1a-835f-6e8c795fb16b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Image of Users table with data in it<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rushitrivedi83/IT202-008/pull/11">https://github.com/rushitrivedi83/IT202-008/pull/11</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>Basically from the UI, we take the user input, using the form and<br>input element, and when the form is filled up, we have a submit<br>button which makes a post request to our &quot;backend&quot; to create the user<br>based on the information passed in the POST request. Also in the front<br>end and back end we have validation to ensure security, such as making<br>sure email is an email, username is a valid username, and password length.<br>We also sanitize all the requests to make sure there is no threats.<br>We also take the password sent, and store the hashed password in DB.<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/161451291-8d335077-5da4-4d72-ab05-d4fc38f6b9df.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>UI of the login screen<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/161451329-b3245039-ff77-4504-884c-765d7e70f405.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Validation message/flash messages when invalid data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/161451891-13868344-8bd5-460f-be55-3f2301828095.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Successful Login Screenshot<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rushitrivedi83/IT202-008/pull/12">https://github.com/rushitrivedi83/IT202-008/pull/12</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>Similarly to register, we have a form, and once the form is submitted<br>we sent a post request. Within the post request, we validate that the<br>username/email exists, and if they exist, we make sure the hash password in<br>db matches the password inputted by the user. We also have user validation<br>that checks if the input is a valid email, valid username, and if<br>the password has required length. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/161452118-12ed3b43-b0d6-46e6-bbe0-ab8cab6fe1c4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of succesful logout message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/161452140-bfa10ec3-dbaa-4f3f-bf95-af4a88f3b57f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of user not being able to go to home page after logging<br>out<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rushitrivedi83/IT202-008/pull/14">https://github.com/rushitrivedi83/IT202-008/pull/14</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>Basically in logout, when the user clicks the logout, we destroy the session<br>and unset the session we created on login, and then we flash the<br>successfully message and redirect users back to login page.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/161452140-bfa10ec3-dbaa-4f3f-bf95-af4a88f3b57f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Logged out and tried to access home page.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page (a test/dummy page is fine)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/161452324-06f0aa26-90d6-4521-926b-4ff6c45cc2e8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Logged in as a non admin, and trying to access an admin page.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/161452383-642fe27c-cd1a-4f69-af3a-eeaa7d5b05f4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the roles table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/161452413-8550a1bf-95d0-4d42-8383-ee6a628b3a40.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the user roles table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rushitrivedi83/IT202-008/pull/31">https://github.com/rushitrivedi83/IT202-008/pull/31</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>For login-protected pages we check the session and make sure a user key<br>exists, and if it exists then we let user have access to the<br>login-protected page, and if not redirect back to login and throw a flash<br>message.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>Similar to login protected pages, we do one more check, and this check<br>is for the roles key inside the user object of the session storage,<br>and if the user&#39;s role permits access to the page then we give<br>it access and if not we redirect them back to original page with<br>a flash message. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/161452462-17f639e0-ea85-4d58-ad2f-6ed804a518ae.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Login Page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/161452471-095b143e-5fe8-4a11-88ee-6b40df57a614.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Register Page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/161452488-e0e9e07e-2a5a-46a1-871e-519dbbbe6c04.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Profile Page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/161452504-7c1a47cb-1488-4d2d-b6a8-99fea471460f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Create Role Page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/161452520-680951b3-56a4-4377-93a0-3c22973d5ceb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>List Roles Page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/161452539-efc18c61-0437-4459-8986-3bf02fce062e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Assign Roles Page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rushitrivedi83/IT202-008/pull/35">https://github.com/rushitrivedi83/IT202-008/pull/35</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>For input boxes, I basically made border a bit round by setting border-radius,<br>and I also added border, and made the box-sizing border-box. I also changed<br>the width of it 30% of the screen.<br>I did similar thing for the<br>buttons but changed around size and padding of the box to make it<br>fit for example the Toggle bottle in the list_roles page. And overall, I<br>added padding and such to the form to make it not stuck to<br>the left side of the screen. And I also created a div, and<br>then use verticlal-align and text-align to put the login and register form in<br>the center of the page. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/161453586-0442e45f-66e2-48d6-b4f6-a4481c5b19af.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Invalid Password Error<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/161453704-fc27ea74-e759-49a8-b6c8-9450a8c15d7e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>invalid email<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/161453736-b4cac2f7-2124-4e64-8e64-54448f9d8306.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Invalid username<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rushitrivedi83/IT202-008/pull/14">https://github.com/rushitrivedi83/IT202-008/pull/14</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>To make our messages user friendly, we create a component in html called<br>flash, which basically holds all the error message that the system can throw<br>in it. And as the error messages appear, we put them in an<br>array and show them on the div, since it basically loops over all<br>the messages being sent to the functions and displays it on the UI.<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/161452504-7c1a47cb-1488-4d2d-b6a8-99fea471460f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the profile page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rushitrivedi83/IT202-008/pull/15">https://github.com/rushitrivedi83/IT202-008/pull/15</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>Basically we load in a form which is prefilled with  certain data<br>that we get using user_helper function that is retrieved from sessions. Then we<br>just fill those data in the input as the values, and keep the<br>other input/fields of the the user profile page empty. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/161454429-d1dbcad8-3dc3-42cf-8ceb-d0d261bfd992.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Validation Message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/161454533-1c6aecb8-88f2-4036-ad34-1038754c6ba6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Successful Messge<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/161454478-2ec11254-5028-4673-bd8e-67461bc8f888.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Password Validation<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/161454399-9188db40-6622-42b2-8f0b-d12186c81243.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before Picture<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/161454551-2be3ef70-0946-41f7-8451-ba932005ed7a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After Picture<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rushitrivedi83/IT202-008/pull/15">https://github.com/rushitrivedi83/IT202-008/pull/15</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>In this from the previous steps we basically use the post request to<br>find out the new values and make the appropriate changes in DB. Similarly<br>we always do basic validation as making sure the currentPassword matches the password<br>stored in DB before changing the password. One cool thing is that since<br>we are also able to switch email and username, instead of using those<br>values to find the record in the DB we get the username value<br>from the Session, and use that to find the record of the User<br>to make appropriate the changes use update query. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Proposal and Issues </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone1.md accordingly and a direct link to the path on heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/161456596-ca803a76-cf49-4a15-99a8-0b8c6a158bb1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot1<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/161456630-d2f94193-a84b-414c-913f-5d270f2f2090.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot2<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/161454750-ace2609e-cc72-41f4-b005-57f79cf86c89.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Since our milestone1 is done with everything that was asked, all the tickets<br>are in done bucket. Once I add all the tickets for Milestone2 then<br>there will be tickets in to do buckets. <br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone1-deliverable/grade/rat3" target="_blank">Grading</a></td></tr></table>