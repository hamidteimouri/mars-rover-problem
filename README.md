# Mars Rover Implementation via PHP

## _Problem_

A squad of robotic rovers is to be landed by NASA on a plateau on Mars. This plateau, which is curiously rectangular,
must be navigated by the rovers so that their on board cameras can get a complete view of the surrounding terrain to
send back to Earth.
<br>A rover's position is represented by a combination of an x and y coordinates and a letter
representing one of the four cardinal compass points. The plateau is divided up into a grid to simplify navigation.
<br>An example position might be `0, 0, N` which means the rover is in the bottom left corner and facing North. In order to
control a rover, NASA sends a simple string of letters.
<br>The possible letters are `L`, `R` and `M`.
`L` and `R` makes the rover spin `90` degrees left or right respectively, without moving from its current spot.
`M` means move forward one grid point, and maintain the same heading.
<br>Assume that the square directly North
from `(x, y)` is `(x, y+1)`.

## Some notes:

- The first line of input is the upper-right coordinates of the plateau, the lower-left coordinates are assumed to
  be `0,0`.
- The rest of the input is information pertaining to the rovers that have been deployed. Each rover has two lines of
  input. The first line gives the rover's position, and the second line is a series of instructions telling the rover
  how to explore the plateau.
- The position is made up of two integers and a letter separated by spaces, corresponding to the `x` and `y`
  coordinates and the rover's orientation.
- Each rover will be finished sequentially, which means that the second rover won't start to move until the first one
  has finished moving.

## Example :

#### Test input :

```sh
5 5
1 2 N           # position of first rover
LMLMLMLMM       # movement structure series of first rover
3 3 E           # position of second rover
MMRMMRMRRM      # movement structure series of second rover
```

#### Test output :

```sh
1 3 N
5 1 E
```

## How to run

Write this command in terminal:

```sh
php index.php
```

You will see this message, and you should type your inputs like this:

```sh
# please type inputs line by line

5 5
1 2 N
LMLMLMLMM
3 3 E
MMRMMRMRRM
```