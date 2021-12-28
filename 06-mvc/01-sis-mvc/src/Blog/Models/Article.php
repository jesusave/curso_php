<?php
    namespace Blog\Models;

    class Article {
        protected int $id;
        protected string $title;
        protected string $content;

        public function __construct(int $id, string $title, string $content)
        {
            $this->id = $id;
            $this->title = $title;
            $this->content = $content;
        }

        public function getId() : int {
            return $this->id;
        }

        public function getTitle() : string {
            return $this->title;
        }

        public function getContent() : string {
            return $this->content;
        }
    }