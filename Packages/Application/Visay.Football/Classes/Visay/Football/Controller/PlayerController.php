<?php
namespace Visay\Football\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Visay.Football".        *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Mvc\Controller\ActionController;
use Visay\Football\Domain\Model\Player;

class PlayerController extends ActionController {

	/**
	 * @Flow\Inject
	 * @var \Visay\Football\Domain\Repository\PlayerRepository
	 */
	protected $playerRepository;

	/**
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('players', $this->playerRepository->findAll());
	}

	/**
	 * @param \Visay\Football\Domain\Model\Player $player
	 * @return void
	 */
	public function showAction(Player $player) {
		$this->view->assign('player', $player);
	}

	/**
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * @param \Visay\Football\Domain\Model\Player $newPlayer
	 * @return void
	 */
	public function createAction(Player $newPlayer) {
		$this->playerRepository->add($newPlayer);
		$this->addFlashMessage('Created a new player.');
		$this->redirect('index');
	}

	/**
	 * @param \Visay\Football\Domain\Model\Player $player
	 * @return void
	 */
	public function editAction(Player $player) {
		$this->view->assign('player', $player);
	}

	/**
	 * @param \Visay\Football\Domain\Model\Player $player
	 * @return void
	 */
	public function updateAction(Player $player) {
		$this->playerRepository->update($player);
		$this->addFlashMessage('Updated the player.');
		$this->redirect('index');
	}

	/**
	 * @param \Visay\Football\Domain\Model\Player $player
	 * @return void
	 */
	public function deleteAction(Player $player) {
		$this->playerRepository->remove($player);
		$this->addFlashMessage('Deleted a player.');
		$this->redirect('index');
	}

}