<?php

class Rover
{
    private int $x, $y;
    private string $orientation;
    private $oriantations = ['N' => 1, 'E' => 2, 'S' => 3, 'W' => 4];

    public function __construct($x, $y, $direction)
    {
        $this->x = $x;
        $this->y = $y;
        $this->orientation = $direction;
    }

    public function start($movement)
    {
        foreach (str_split(strtoupper($movement)) as $char) {
            $this->direction_handler($char);
            if ($char === "M") {
                $this->move();
            }
        }
        echo $this->x . " " . $this->y . " " . $this->orientation . "\n";
    }

    private function direction_handler($dir)
    {
        switch ($dir) {
            case 'L':
                if ($this->orientation == 'N') $this->orientation = 'W';
                elseif ($this->orientation == 'W') $this->orientation = 'S';
                elseif ($this->orientation == 'S') $this->orientation = 'E';
                elseif ($this->orientation == 'E') $this->orientation = 'N';
                break;
            case 'R':
                if ($this->orientation == 'N') $this->orientation = 'E';
                elseif ($this->orientation == 'W') $this->orientation = 'N';
                elseif ($this->orientation == 'S') $this->orientation = 'W';
                elseif ($this->orientation == 'E') $this->orientation = 'S';
                break;
        }
    }

    private function move()
    {
        switch ($this->orientation) {
            case "N":
                $this->y++;
                break;
            case "S":
                $this->y--;
                break;
            case "E":
                $this->x++;
                break;
            case "W":
                $this->x--;
                break;
        }
    }

}


print "Please type coordinates line by line : \n";
$area = fgets(STDIN);
while (true) {
    $lines = [];
    for ($i = 0; $i <= 3; $i++) {
        array_push($lines, fgets(STDIN));
    }
    $area = new Rover((int)$lines[0][0], (int)$lines[0][1], (string)$lines[0][2]);
    $area->start($lines[1]);
    $area2 = new Rover((int)$lines[2][0], (int)$lines[2][1], (string)$lines[2][2]);
    $area2->start($lines[3]);
    die("\nfinished\n");
}