<table><tr><td> <em>Assignment: </em> HW HTML5 Canvas Game</td></tr>
<tr><td> <em>Student: </em> Rushi Trivedi(rat3)</td></tr>
<tr><td> <em>Generated: </em> 3/24/2022 11:32:53 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/hw-html5-canvas-game/grade/rat3" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Create a branch for this assignment called <em>M6-HTML5-Canvas</em></li>
<li>Pick a base HTML5 game from <a href="https://bencentra.com/2017-07-11-basic-html5-canvas-games.html">https://bencentra.com/2017-07-11-basic-html5-canvas-games.html</a></li>
<li>Create a folder inside public_html called  <em>M6</em></li>
<li>Create an html5.html file in your M6 folder (do not put it in Project even if you&#39;re doing arcade)</li>
<li>Copy one of the base games (from the above link)</li>
<li>Add/Commit the baseline of the game you&#39;ll mod for this assignment <em>(Do this before you start any mods/changes)</em></li>
<li>Make two significant changes<ol>
<li>Static changes like hard-coded colors/values will not count at all (i.e., changing shapes/colors/values that are globally defined and set only once.</li>
<li>Direct copies of my class example changes will not be accepted (i.e., just having an AI player for pong, rotating canvas, or multi-ball unless you make a significant tweak to it)</li>
<li>Significant changes are things that change with game logic or modify how the game works. Static changes like hard-coded colors/values will not count at all (i.e., changing shapes/colors/values that are globally defined and set only once). You may however change such values through game logic during runtime. (i.e., when points are scored, boundaries are hit, some action occurs, etc)</li>
</ol>
</li>
<li>Evidence/Screenshots<ol>
<li>As best as you can, gather evidence for your first significant change and fill in the deliverable items below.</li>
<li>As best as you can, gather evidence for your significant change and fill in the deliverable items below.</li>
<li>Remember to include your ucid/date as comments in any screenshots that have code</li>
<li>Ensure your screenshots load and are visible from the md file in step 9</li>
</ol>
</li>
<li>In the M6 folder create a new file called m6_submission.md</li>
<li>Save your below responses, generate the markdown, and paste the output to this file</li>
<li>Add/commit/push all related files as necessary</li>
<li>Merge your pull request once you&#39;re satisfied with the .md file and the canvas game mods</li>
<li>Create a new pull request from dev to prod and merge it</li>
<li>Locally checkout dev and pull the merged changes from step 12</li>
</ol>
<p>Each missed or failed to follow instruction is eligible for -0.25 from the final grade</p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Game Info </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What game did you pick to edit/modify?</td></tr>
<tr><td> <em>Response:</em> <p>I picked the shooter game<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the direct link to the html5.html file from Heroku Prod (i.e., https://mt85-prod.herokuapp.com/M6/html5.html)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href=" https://rat3-prod.herokuapp.com/M6/shooter.html"> https://rat3-prod.herokuapp.com/M6/shooter.html</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the pull request link for this assignment from M6-HTML5-Canvas to dev</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rushitrivedi83/IT202-008/pull/27">https://github.com/rushitrivedi83/IT202-008/pull/27</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Significant Change #1 </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe your change/modification</td></tr>
<tr><td> <em>Response:</em> <p>One of the significant changes I made is that instead of the ship<br>being only able to move in 2 directions, top to bottom, I made<br>it so now it can move in all four directions. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot of the change while playing (try your best as some changes may be nearly impossible to capture)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/160047613-a8fb3c67-54f5-4195-9e6d-e96f314d22a3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>In this you can see, that now my ship is able to move<br>out of the 2 direction space, and I actually move into more of<br>the canvas as described in the change. It basically shows the ship being<br>in the center instead of the left.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot of the relevant lines of code that implement your change (make sure your ucid and the date are shown in comments) In the caption briefly describe/explain how the code snippet works.</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/160048210-99bee721-58cc-4d03-a6c6-7f407a539345.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>In this code, we implement right and left arrow keys to the event<br>listener. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/160048372-fcf27a91-af3e-4b09-9896-1088c5c43695.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>In this code, we are basically adding the movement after the event listener,<br>and as well as adding a constraints so the ship doesn&#39;t go out<br>of bounds. <br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Significant Change #2 </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe your change/modification</td></tr>
<tr><td> <em>Response:</em> <p>Another change that I made was that every single time the score increases,<br>we make it so that the ship size also increases. This basically makes<br>it harder for the ship to dodge incoming enemies as the game progresses.<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot of the change while playing (try your best as some changes may be nearly impossible to capture)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/160047906-d26022ab-d1a6-442f-8a22-2745e726832d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>In here you can see that at the start, the ship size is<br>small<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/160049051-987c4dab-b40a-4fe0-94c6-3173bfa7bd4a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>In here you can see that as score increases, so does the ship<br>size as it is larger than previous screenshot. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot of the relevant lines of code that implement your change (make sure your ucid and the date are shown in comments) In the caption briefly describe/explain how the code snippet works.</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/68829962/160048637-f6bab546-70f7-45a4-a8b0-7ae6aedee2cf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>In this screenshot, you will see the addition that when the bullet collides<br>with enemies, we basically increase the size of the ship.<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Discuss </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Talk about what you learned during this assignment and the related HTML5 Canvas readings (at least a few sentences for full credit)</td></tr>
<tr><td> <em>Response:</em> <p>One of the things I learned is how HTML5 Canvas actually works, I<br>never used HTML5 Canvas before, so this was pretty cool experience. Moreover, messing<br>around with the games was really fun and understanding how the code works.<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/hw-html5-canvas-game/grade/rat3" target="_blank">Grading</a></td></tr></table>