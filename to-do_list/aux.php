<?php

function store_todo(string $todo_phrase) : void
{
    $_SESSION['todos'][] = $todo_phrase;
}

function print_todos() : void
{
    echo "<ul>";

    $todos = $_SESSION['todos'];

    if (isset($todos)) foreach ($todos as $todo) {
        echo "<li>" . $todo . "</li>";
    }

    echo "</ul>";
}