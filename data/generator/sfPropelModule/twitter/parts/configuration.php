[?php

/**
 * <?php echo $this->getModuleName() ?> module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage <?php echo $this->getModuleName()."\n" ?>
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class Base<?php echo ucfirst($this->getModuleName()) ?>GeneratorConfiguration extends sfTwitterModelGeneratorConfiguration
{
<?php include dirname(__FILE__).'/actionsConfiguration.php' ?>

<?php include dirname(__FILE__).'/fieldsConfiguration.php' ?>

  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return '<?php echo isset($this->config['form']['class']) ? $this->config['form']['class'] : $this->getModelClass().'Form' ?>';
<?php unset($this->config['form']['class']) ?>
  }

  public function hasFilterForm()
  {
    return <?php echo !isset($this->config['filter']['class']) || false !== $this->config['filter']['class'] ? 'true' : 'false' ?>;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return '<?php echo isset($this->config['filter']['class']) && !in_array($this->config['filter']['class'], array(null, true, false), true) ? $this->config['filter']['class'] : $this->getModelClass().'FormFilter' ?>';
<?php unset($this->config['filter']['class']) ?>
  }

<?php include dirname(__FILE__).'/paginationConfiguration.php' ?>

<?php include dirname(__FILE__).'/sortingConfiguration.php' ?>

  public function getWiths()
  {
    return <?php echo $this->asPhp(isset($this->config['list']['with']) ? $this->config['list']['with'] : array()) ?>;
<?php unset($this->config['list']['with']) ?>
  }

  public function getQueryMethods()
  {
    return <?php echo $this->asPhp(isset($this->config['list']['query_methods']) ? $this->config['list']['query_methods'] : array()) ?>;
<?php unset($this->config['list']['query_methods']) ?>
  }

  public function hasListPartial()
  {
    return <?php echo $this->asPhp(isset($this->config['list']['partial']) ? true : false) ?>;
  }

  public function getListPartial()
  {
    return <?php echo $this->asPhp(isset($this->config['list']['partial'])
                                        ? is_array($this->config['list']['partial'])
                                            ? $this->config['list']['partial']
                                            : array($this->config['list']['partial'])
                                        : array()) ?>;
<?php unset($this->config['list']['partial']) ?>
  }

  public function hasEditPartial()
  {
    return <?php echo $this->asPhp(isset($this->config['edit']['partial']) ? true : false) ?>;
  }

  public function getEditPartial()
  {
    return <?php echo $this->asPhp(isset($this->config['edit']['partial'])
                                        ? is_array($this->config['edit']['partial'])
                                            ? $this->config['edit']['partial']
                                            : array($this->config['edit']['partial'])
                                        : array()) ?>;
<?php unset($this->config['edit']['partial']) ?>
  }

  public function hasNewPartial()
  {
    return <?php echo $this->asPhp(isset($this->config['new']['partial']) ? true : false) ?>;
  }

  public function getNewPartial()
  {
    return <?php echo $this->asPhp(isset($this->config['new']['partial'])
                                        ? is_array($this->config['new']['partial'])
                                            ? $this->config['new']['partial']
                                            : array($this->config['new']['partial'])
                                        : array()) ?>;
<?php unset($this->config['new']['partial']) ?>
  }
}
