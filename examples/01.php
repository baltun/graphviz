<?php

require __DIR__ . '/../vendor/autoload.php';

use Fhaculty\Graph\Graph;
use Graphp\GraphViz\GraphViz;

$graphViz = new GraphViz();
$graph = new Graph();
$graph->createVertex('a')->createEdgeTo($graph->createVertex('b'));

$expected = <<<VIZ
digraph G {
  "a" -> "b"
}

VIZ;

$graphScript = $graphViz->createScript($graph);

//var_dump($expected, $graphScript);
$graphViz->display($graph, 'graph1');