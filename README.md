# php-kata

## String Calculator Kata

 - It returns 0 for empty string
 - It returns 0 for the string '0'
 - It returns the bare number for a single number 
   (e.g. '2' -> 2)
 - It returns the sum of space-separated numbers
   (e.g. '1 2' -> 3)
 - It returns the sum of any whitespace-separated numbers
   (e.g. '1  2/t3/n4' -> 10)
- It returns the sum of numbers separated by custom separator given as first char
    (e.g. '~1~2' -> 3)


## Tennis Game Calculator Kata

### Rules:
1. A game is won by the first player to have won at least four points in total and at least two points more than the opponent.

2. The running score of each game is described in a manner peculiar to tennis: scores from zero to three points are described as “love”, “fifteen”, “thirty”, and “forty” respectively.

3. If at least three points have been scored by each player, and the scores are equal, the score is “deuce”.

4. If at least three points have been scored by each side and a player has one more point than his opponent, the score of the game is “advantage” for the player in the lead.


The system allows each player to `score` a point and returns a string representing the current score: 

e.g. 
 - Player one scores
 
 -> `Fifteen - Love`
 
 - Player one scores
 - Player two scores
  
  -> `Fifteen - all`