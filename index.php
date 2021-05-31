<?php
/**
 *  MOVIES
 */

class Movie {
    /**
     *  ATTRIBUTES
     */
    public $title;
    public $language;
    public $description;
    public $vote;
    public $actors;

    /**
     *  CONSTRUCTOR
     */
    function __construct($title, $language, $description, $actors) {
        $this->title = $title;
        $this->language = $language;
        $this->description = $description;
        $this->actors = $actors;
    }

    /**
     *  METHODS
     */
    function setVote($vote) {
        return $this->vote = $vote;
    }
}

// INSTANCE 1

$first_movie = new Movie('Interstellar', 'English', 'In the 21st century [3] [4] planet Earth is becoming uninhabitable for humans: food is scarce because only a few crops resist the "plague", a natural scourge that feeds on nitrogen and consumes oxygen from the atmosphere , and immense sandstorms make everyday life impossible. As a consequence of this, a society based on post-truth has established itself, which denies many scientific achievements and space missions to concentrate the few available energies on food production, and mankind appears doomed to extinction within two generations at the most. . Joseph Cooper, an engineer and former NASA pilot, lives and works on his farm with his family, consisting of his father-in-law Donald and his children, Tom and 12-year-old Murphy (named Murph), while his wife passed away years earlier. Little Murph, a mathematical prodigy, witnesses strange phenomena in her room such as the rhythm of books and other objects falling from the bookcase: her conclusion is that the room would be haunted by an invisible "ghost" that is trying to communicate with her in Morse code. During a large sandstorm, streaks of sand form on the floor of the room. Cooper senses it may be binary code and, deciphering it, obtains geographic coordinates.', 'Matthew McConaughey, Anne Hathaway, Jessica Chastain, Michael Caine, Ellen Burstyn');

$vote_first_movie = $first_movie->setVote(4);

var_dump($first_movie);
echo "The vote of the first movie is: $vote_first_movie";
// INSTANCE 2

$second_movie = new Movie('Passengers', 'English', 'The fully automated spacecraft Avalon, owned by the Homestead Company, is making a 120-year interstellar voyage to the Homestead II colony, carrying a crew of 258 members and 5,000 passengers, all undergoing cryogenic sleep. The passengers are people who for various reasons have decided to leave planet Earth and settle on the new planet. Due to a collision with a meteorite field, a series of malfunctions began to occur on the spaceship, theoretically inconvenience-proof. The first of them leads to the awakening, 90 years earlier than expected, of one of the passengers, the mechanical engineer Jim Preston, who does not take long to realize that something has gone wrong, that among all the human beings present on the spaceship he is the only one in a waking state and that his life will end well before he reaches his destination.', 'Jennifer Lawrence, Chris Pratt, Michael Sheen, Laurence Fishburne, Andy Garcia');

$vote_second_movie = $second_movie->setVote(4.2);

var_dump($second_movie);
echo "The vote of the second movie is: $vote_second_movie";