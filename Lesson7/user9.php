<?php

function outputHeaderTemplate(User $currentUser) {
    echo "<p>Hello there, " . $currentUser->getFormattedHandle() . "</p>\n";
}

class User {
    protected $name;
    protected $title;

    public function __construct($name, $title) {
        $this->name = $name;
        $this->title = $title;
    }

    public function getFormattedHandle() {
        return $this->getHandle();
    }
    
    private function getHandle() {
        return $this->title . " " . $this->name;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function __toString() {
        return $this->getFormattedHandle();
    }
}


class Guest extends User {
    public function getHandle() {
        return "Guest";
    }
}


class Moderator extends User {
    public function banUser() {
        // ban code goes here
    }
}

$user = new User("Doe", "Ms");
echo $user;

