Features:
- User signup and login
- Randomized quiz
- Saving your score
- Leaderboard
- Logging out
- Retrying the quiz

How to run the server:
- Start Apache and MySQL with XAMPP
- Place the folder into htdocs
- Import quiz.sql into phpMyAdmin
- Open localhost/quiz/login.php in your browser

The URL:
- quizapp.gamer.gd

4. Database schema:

Two tables:
- users
   - id
   - username
   - password
- scores
   - id
   - user_id
   - score

Test Account:
Username: ProfessorB
Password: 2CoolPassword



