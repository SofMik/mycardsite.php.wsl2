<?php

class PageController {
    public function render($page) {
        $title = ucfirst($page);
        include __DIR__ . '/../Views/layout.php';
    }
}
