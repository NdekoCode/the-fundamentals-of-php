<?php

/**
 * Créer un lien de navigation avec verification du lien courant
 *
 * @param string $link Le lien où on veut se rendre
 * @param string $title Le titre de la navigation
 * @return string
 */
function navItem(string $link, string $title): string
{
    $class = "nav-link";
    $class .= $_SERVER["SCRIPT_NAME"] === $link  ? " active" : "";
    return <<<HTML
        <li class="nav-item">
            <a class="$class" href="$link">$title</a>
        </li>
    HTML;
}
