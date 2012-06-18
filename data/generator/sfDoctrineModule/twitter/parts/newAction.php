  public function executeNew(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm(null, array(
        'backend_user' => $this->getUser()
    ));
    $this-><?php echo $this->getSingularName() ?> = $this->form->getObject();
  }
