# Project Name: Simple Arcade
## Project Summary: This project will create a simple Arcade with scoreboards and competitions based on the implemented game.
## Github Link: https://github.com/rushitrivedi83/IT202-008/tree/prod 
## Project Board Link: https://github.com/rushitrivedi83/IT202-008/projects/1 
## Website Link: https://rat3-prod.herokuapp.com/Project/ 
## Your Name: Rushi Trivedi

<!-- Line item / Feature template (use this for each bullet point) -- DO NOT DELETE THIS SECTION


- [ ] \(mm/dd/yyyy of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  Link to related .md file: [Link Name](link url)

 End Line item / Feature Template -- DO NOT DELETE THIS SECTION --> 
 
 
### Proposal Checklist and Evidence

- Milestone 1
	* User will be able to register a new account
		* Form Fields
			* Username, email, password, confirm password(other fields optional)
			* Email is required and must be validated
			* Username is required
			* Confirm password’s match
		* <span style="text-decoration:underline;">Users</span> Table
			* Id, username, email, password (60 characters), created, modified
		* Password must be hashed (plain text passwords will lose points)
		* Email should be unique
		* Username should be unique
		* System should let user know if username or email is taken and allow the user to correct the error without wiping/clearing the form
			* The only fields that may be cleared are the password fields
	* User will be able to login to their account (given they enter the correct credentials)
		* Form
			* User can login with **email **or **username**
				* This can be done as a single field or as two separate fields
			* Password is required
		* User should see friendly error messages when an account either doesn’t exist or if passwords don’t match
		* Logging in should fetch the user’s details (and roles) and save them into the session.
		* User will be directed to a landing page upon login
			* This is a protected page (non-logged in users shouldn’t have access)
			* This can be home, profile, a dashboard, etc
	* User will be able to logout
		* Logging out will redirect to login page
		* User should see a message that they’ve successfully logged out
		* Session should be destroyed (so the back button doesn’t allow them access back in)
	* Basic security rules implemented
		* Authentication:
			* Function to check if user is logged in
			* Function should be called on appropriate pages that only allow logged in users
		* Roles/Authorization:
			* Have a roles table (see below)
	* Basic Roles implemented
		* Have a <span style="text-decoration:underline;">Roles</span> table	(id, name, description, is_active, modified, created)
		* Have a <span style="text-decoration:underline;">User Roles</span> table (id, user_id, role_id, is_active, created, modified)
		* Include a function to check if a user has a specific role (we won’t use it for this milestone but it should be usable in the future)
	* Site should have basic styles/theme applied; everything should be styled
		* I.e., forms/input, navigation bar, etc
	* Any output messages/errors should be “user friendly”
		* Any technical errors or debug output displayed will result in a loss of points
	* User will be able to see their profile
		* Email, username, etc
	* User will be able to edit their profile
		* Changing username/email should properly check to see if it’s available before allowing the change
		* Any other fields should be properly validated
		* Allow password reset (only if the existing correct password is provided)
			* Hint: logic for the password check would be similar to login

- Milestone 2
	* Pick a simple game to implement, anything that generates a score that’s more advanced than a simple random number generator (may build off of a sample from the site shared in class for the HTML5 HW)
		* What game will you be doing?
			* **[game]**
		* Briefly describe it.
			* **[describe]**
		* **Note**: For this milestone the game doesn’t need to be complete, just have something basic or a placeholder that can generate a score when played.
	* The system will save the user’s score at the end of the game only if the user is logged in
		* There should be a <span style="text-decoration:underline;">Scores</span> table (id, user_id, score, created, modified)
		* Each received score should be a new entry (scores will not be updated)
			* Please let me know if your project expects a running total score
	* The user will be able to see their last 10 scores
		* Shown on their profile page
		* Ordered by most recent
	* Create function(s) that output the following scoreboards
		* Top 10 Weekly
		* Top 10 Monthly
		* Top 10 Lifetime
		* Scoreboards should show no more than 10 results; if there are no results a proper message should be displayed (i.e., “No [time period] scores to display”)
	* Create a Homepage (index.php)
		* Include a weekly, monthly, and lifetime scoreboard
			* Scoreboards will show username, score, timestamp of when the score was received
			* You may manually edit some score entries in the database to show proof each scoreboard output works
		* Include a link to the game
		* Include a description of your project/game
		* Include a proper heading

- Milestone 3
	* Users will have credits associated with their account.
		* Alter the User table to include credits with a default of 0.
			* This field must not be incremented/decremented directly, you must use the CreditHistory table to calculate it and set it each time the credits change (hint: using SQL sum())
		* Credits should show on the user’s profile page
			* You may show credits elsewhere _as well_ if you wish
	* Create a <span style="text-decoration:underline;">CreditsHistory</span> table (id, user_id, credit_diff, reason, created)
		* Any new entry should update the user’s credits value (do not update the User credits column directly)
			* SUM the credit_diff for the user_id to get the total
	* <span style="text-decoration:underline;">Competitions</span> table should have the following columns (id, name, duration, expires (value = now + duration), current_reward, starting_reward, join_fee, current_participants, min_participants, paid_out (boolean default false), did_calc (boolean default false), min_score, first_place_per, second_place_per, third_place_per, cost_to_create, created_by (user_id ref), created, modified)
	* User will be able to create a competition
		* Competitions will start at 1 credit (reward)
		* User sets a name for the competition
		* User determines % given for 1st, 2nd, and 3rd place winners
			* Combination must be equal to 100% (no more, no less)
		* User determines if it’s free to join or the cost to join (min 0 for free)
		* User determines the duration of the competition (in days)
		* User can determine the minimum score to qualify (min 0)
		* User determines minimum participants for payout (min 3)
		* Show any user friendly error messages
		* Show user friendly confirmation message that competition was created
		* The cost to the creator of the competition will be (1 + starting reward value)
			* If they can’t afford it, the competition should not be created
			* If they can afford it, automatically add them to the competition as a participant but don’t trigger the Reward increase in the following step
	* Each new participant causes the Reward value to increase by 50% of the joining fee rounded up (i.e., at least 1)
		* This should be an equation based on number of participants, do not just increment the reward value (this is repeated below as well)
	* Have a page where the User can see active competitions (not expired)
		* For this milestone limit the output to a maximum of 10
		* Order the results by soonest to expire
	* Will need an association table <span style="text-decoration:underline;">CompetitionParticipants</span> (id, comp_id, user_id, created, modified)
		* Comp_id and user_id should be a composite unique key (user can only join a competition once)
	* User can join active competitions 
		* Creates an entry in CompetitionParticipants
		* Recalculate the Competitions.participants value based on the count of participants for this competition from the CompetitionParticipants table.
		* Update the Competitions.reward based on the # of participants and the appropriate math from the competition requirements above
			* Best to do this based on a simple equation via the initial Competition data and participants
			* Do not just increment the reward
		* Show proper error message if user is already registered
		* Show proper confirmation if user registered successfully
	* Create function that calculates competition winners (clearly comment each step in the code)
		* Get all expired and not paid_out and not did_calc competitions (limit to 10 at a time)
		* For each competition
			* Compare the participant count against the minimum required
			* Get the top 3 winners
				* **Pick 1 (strike out the option you won’t do; do not delete):**
					* **Option 1: **Scores are calculated by the sum of the score from the Scores table where it was earned/created between Competition start and Competition expires timestamps
					* **Option 2: **Where the individual score was earned/created between when the user joined the competition and when the Competition expires
			* Calculate the payout (reward * place_percent)
				* Round up the value (it’s ok to pay out an extra credit here and there)
			* Create entries for the Users in the CreditsHistory table
				* Apply the new values (SUM) to their credits column in the Users table after entry is added
				* Reason should be recorded as “Won {credits} credits for {place} place in Competition {name}”
			* Mark the competition as paid_out = true and did_calc = true
		* Mark all invalid competitions as did_calc = true (i.e., where # of participants is less than the minimum)

- Milestone 4
	* User can set their profile to be public or private (will need another column in Users table)
		* If profile is public, hide email address from **other** users (email address should not be publicly visible to others)
	* User will be able to see their competition history
		* Limit to 10 results
		* Paginate anything after 10
		* If no results, show the appropriate message
		* Show the competition name, participant count, reward, the expiry date if active otherwise “expired”, whether or not they are the creator
	* User with the role of “admin” can edit a competition where paid_out = false
		* They can adjust any of the regular form values
		* If the competition was expired they can update the duration to include extra time
	* Add pagination to the Active Competitions view
		* Show 10 competitions per page
		* Paginate anything after 10
		* If no results, show the appropriate message
	* Anywhere a username is displayed should link to that user’s profile
		* This includes all scoreboards (i.e., Homepage, etc)
		* If the profile is private you can have the page just display “this profile is private” upon access
	* Viewing an active or expired competition should show the top 10 scoreboard related to that competition
		* **Note**: This scoreboard is only the scores related to the competition and not the same type of scoreboard as the Homepage
	* Game should be fully implemented/completed by this point
		* Game should tell the player if they’re not logged in that their score will not be recorded.
	* User’s score history will include pagination
		* Show latest 10
		* Paginate after 10
		* Show appropriate message for no results

### Intructions
#### Don't delete this
1. Pick one project type
2. Create a proposal.md file in the root of your project directory of your GitHub repository
3. Copy the contents of the Google Doc into this readme file per the template
4. Convert the list items to markdown checkboxes (apply any other markdown for organizational purposes)
5. Create a new Project Board on GitHub
   - Choose the Automated Kanban Board Template
   - For each major line item (or sub line item if applicable) create a GitHub issue
   - The title should be the line item text
   - The first comment should be the acceptance criteria (i.e., what you need to accomplish for it to be "complete")
   - Leave these in "to do" status until you start working on them
   - Assign each issue to your Project Board (the right-side panel)
   - Assign each issue to yourself (the right-side panel)
6. As you work
  1. As you work on features, create separate branches for the code in the style of Feature-ShortDescription (using the Milestone# branch as the source to branch from and to merge into)
  2. Add, commit, push the related file changes to this branch
  3. Add evidence to the PR (Feat to Milestone) conversation view comments showing the feature being implemented (these will be used to populate the related .md files for each milestone, forgetting to capture this will give you more work later on)
     - Screenshot(s) of the site view (make sure they clearly show the feature)
     - Screenshot of the database data if applicable
     - Describe each screenshot to specify exactly what's being shown
     - A code snippet screenshot or reference via GitHub markdown may be used as an alternative for evidence that can't be captured on the screen
  4. Update the checklist of the proposal.md file for each feature this branch is completing (ideally should be 1 branch/pull request per feature, but some cases may have multiple)
    - Basically add an x to the checkbox markdown along with a date after
      - (i.e.,   - [x] (mm/dd/yy) ....) See Template above
    - Add the pull request link as a new indented line for each line item being completed
    - Attach any related issue items on the right-side panel
  5. Merge the Feature Branch into your Milestone branch (this should close the pull request and the attached issues)
    - Merge the Milestone branch into dev, then dev into prod as needed (be sure it doesn't break anything in prod)
    - Last two steps are mostly for getting it to prod for delivery of the assignment 
  7. If the attached issues don't close wait until the next step
  8. Merge the updated dev branch into your production branch via a pull request
  9. Close any related issues that didn't auto close
    - You can edit the dropdown on the issue or drag/drop it to the proper column on the project board