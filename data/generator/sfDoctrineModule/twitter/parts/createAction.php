  public function executeCreate(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm(null, array(
        'backend_user' => $this->getUser()
    ));
    $this-><?php echo $this->getSingularName() ?> = $this->form->getObject();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }
