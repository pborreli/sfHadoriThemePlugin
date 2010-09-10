[?php use_helper('I18N', 'Date') ?]
<div id="sf_admin_container">
  <h1>[?php echo <?php echo $this->getI18NString('edit.title') ?> ?]</h1>

  [?php include_partial('global/flashes') ?]

  <div class="form-container">
    [?php include_partial('<?php echo $this->getModuleName() ?>/form', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?]
  </div>
</div>
