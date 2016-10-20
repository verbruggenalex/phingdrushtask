<?php

namespace Drush;

/**
 * Class Option. Represents a Drush CLI option.
 */
class Option {

  /**
   * The option's name.
   *
   * @var string
   */
  protected $name;

  /**
   * The option's value.
   *
   * @var string
   */
  protected $value;

  /**
   * Set the option's name.
   *
   * @param string $str
   *   The option's name.
   */
  public function setName($str) {
    $this->name = (string) $str;
  }

  /**
   * Get the option's name.
   *
   * @return string
   *   The option's name.
   */
  public function getName() {
    return $this->name;
  }

  /**
   * Set the option's value.
   *
   * @param string $str
   *   The option's value.
   */
  public function setValue($str) {
    $this->value = $str;
  }

  /**
   * Set the option's value from a text element.
   *
   * @param string $str
   *   The value of the text element.
   */
  public function addText($str) {
    $this->value = (string) $str;
  }

  /**
   * Get the option's value.
   *
   * @return string
   *   The option's value.
   */
  public function getValue() {
    return $this->value;
  }

  /**
   * Get the string.
   *
   * @return string
   *   The option as a string.
   */
  public function toString() {
    $name  = $this->getName();
    $value = $this->getValue();
    $str = '--' . $name;
    if (!empty($value)) {
      $str .= '="' . escapeshellcmd($value) . '"';
    }
    return $str;
  }

}
