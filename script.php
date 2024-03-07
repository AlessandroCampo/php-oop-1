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
    public $img_url;
    public $summary;

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
        $this->img_url = $params['img_url'];
        $this->summary = $params['summary'];
    }

    public function addReview($newReview)
    {
        array_push($this->reviews, $newReview);
    }
}

$prisonersData = [
    'title' => 'Prisoners',
    'cast' => ['Hugh Jackman', 'Jake Gyllenhaal', 'Paul Dano'],
    'vote' => 4,
    'director' => 'Denis Villeneuve',
    'length' => '2h 10m',
    'genres' => ['Thriller', 'Crime'],
    'release_year' => 2013,
    'reviews' => ['I loved this movie!'],
    'img_url' => 'https://media.themoviedb.org/t/p/w500/jsS3a3ep2KyBVmmiwaz3LvK49b1.jpg',
    'summary' => 'In a small town in the American province, two girls disappear. Keller, the father of one of them, is convinced that the culprit is a young man from the neighborhood and decides to kidnap him to force a confession. Meanwhile, the investigator Loki, relentlessly committed to the case, tracks down another suspect'
];

$thePrestigeData = [
    'title' => 'The Prestige',
    'cast' => ['Hugh Jackman', 'Christian Bale', 'Micheal Caine', 'Scarlett Johansson'],
    'vote' => 4,
    'director' => 'Cristopher Nolan',
    'length' => '2h 10m',
    'genres' => ['Thriller', 'Crime'],
    'release_year' => 2006,
    'reviews' => ['This movie looks cool but I didnt understand shit about it...'],
    'img_url' => 'https://image.tmdb.org/t/p/original/cq5RVLOYxYWGkGI3FWGmoTYWheV.jpg',
    'summary' => 'In Victorian-era London, two magician-illusionists, Robert Angier and Alfred Borden, once friends and colleagues, challenge each other every night from a distance by staging performances at the edge of possibility. Their bitter rivalry turns into a true obsession, driving them to risk their lives with astounding acts to prove to themselves and the world their respective superiority...'
];

$prisoner = new Movie($prisonersData);
$thePrestige = new Movie($thePrestigeData);
