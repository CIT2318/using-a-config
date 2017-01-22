<?php
namespace SimpleFilmApp;

class FilmController
{
	private $data=[];

	public function listFilms()
	{
		$this->data["films"]=getAllFilms();
		$this->data["pageTitle"]="List all films";
		$this->getView("list-view");
	}

	public function details($id)
	{
		$this->data["film"]=getFilmById($id);
	    $this->data["pageTitle"]="Film details";
		$this->getView("details-view");
	}

	private function getView($view)
	{
		extract($this->data);
		include("views/".$view.".php");
	}
}