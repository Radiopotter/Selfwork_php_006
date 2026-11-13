
<?php

require_once('Class.php');

class Post {

    private $titolo;
    private $categoria;
    private $tag;

    public function __construct($titolo, Category $categoria, $tag) {
        $this->titolo = $titolo;
        $this->categoria = $categoria;
        $this->tag = $tag;
    }

    public function getTitolo() {
        return $this->titolo;
    }

    public function getMyCategory() {
        return $this->categoria->getMyCategory();
    }

    public function getTag() {
        return $this->tag;
    }
}

$post = new Post("Titolo", new Attualita(), "tag 1");
$post1 = new Post("Titolo 2", new Gossip(), "tag 2");

echo $post->getMyCategory() . "\n";
echo $post1->getTitolo();

?>




