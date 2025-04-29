<?php

namespace Drupal\ys_embed\Plugin\EmbedSource;

use Drupal\ys_embed\Plugin\EmbedSourceBase;
use Drupal\ys_embed\Plugin\EmbedSourceInterface;

/**
 * GitHub Applet embed source.
 *
 * @EmbedSource(
 *   id = "github_applet",
 *   label = @Translation("GitHub Applet"),
 *   description = @Translation("GitHub Applet embed source."),
 *   thumbnail = "github.png",
 *   active = TRUE,
 * )
 */
class GitHubApplet extends EmbedSourceBase implements EmbedSourceInterface {

  /**
   * {@inheritdoc}
   */
  protected static $pattern = '/^https:\/\/namallium\.github\.io\/(?<repo_name>[\w-]+)\/(?<app_directory>.*?)\/?$/';

  /**
   * {@inheritdoc}
   */
  protected static $template = '
    <script type="module" crossorigin src="https://namallium.github.io/{{ repo_name }}/{{ app_directory }}/app.js"></script>
    <link rel="stylesheet" crossorigin href="https://namallium.github.io/{{ repo_name }}/{{ app_directory }}/app.css">
    <div id="{{ repo_name }}"></div>';

  /**
   * {@inheritdoc}
   */
  protected static $instructions = 'Provide the URL to the GitHub Pages hosted repo and directory where app.js and app.css reside for the app. For more information, on how to set up a hosted repo, see the README.md file in the ys_embed module.';

  /**
   * {@inheritdoc}
   */
  protected static $example = 'https://namallium.github.io/yale-po-filter-app/assets';

}
