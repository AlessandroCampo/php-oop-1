<?

class Movie
{
    public $title;
    public $cast;
    public $length;
    public $vote;
    public $release_year;
    public $director;
    public $genres = [];
    public $reviews = [];
    // public $img_url;

    function __construct($params)
    {
        $this->title = $params['title'];
        $this->cast = $params['cast'];
        $this->length = $params['length'];
        $this->vote = $params['vote'];
        $this->release_year = $params['release_year'];
        $this->director = $params['director'];
        $this->genres = $params['genres'];
        $this->reviews = $params['reviews'];
        // $this->img_url = $params['img_url'];
    }

    public function addReview($newReview)
    {
        array_push($this->reviews, $newReview);
    }
}

$prisonersData = [
    'title' => 'prisoners',
    'cast' => ['Hugh Jackman', 'Jake Gyllenhaal', 'Paul Dano'],
    'vote' => 9,
    'director' => 'Denis Villeneuve',
    'length' => '2h 10m',
    'genres' => ['Thriller', 'Crime'],
    'release_year' => 2013,
    'reviews' => ['I loved this movie!'],
    // 'imgUrl' => 'https://pad.mymovies.it/filmclub/2013/05/199/locandina.jpg'
];

$thePrestigeData = [
    'title' => 'prisoners',
    'cast' => ['Hugh Jackman', 'Christian Bale', 'Micheal Caine', 'Scarlett Johansson'],
    'vote' => 8.5,
    'director' => 'Cristopher Nolan',
    'length' => '2h 10m',
    'genres' => ['Thriller', 'Crime'],
    'release_year' => 2006,
    'reviews' => ['This movie looks cool but I didnt understand shit about it...'],
    // 'imgUrl' => 'https://pics.filmaffinity.com/The_Prestige-464630296-large.jpg'
];

$prisoner = new Movie($prisonersData);
$thePrestige = new Movie($thePrestigeData);
