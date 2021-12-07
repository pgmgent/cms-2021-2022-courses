<?php 

function echo_args($args, $name, $tag = null, $class = null) {
    if (isset($args[$name])) {
        echo !empty($tag) ? "<$tag class='$class'> $args[$name] </$tag>" : $args[$name];
    }
}
