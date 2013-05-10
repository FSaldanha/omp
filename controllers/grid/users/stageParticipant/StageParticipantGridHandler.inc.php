<?php

/**
 * @file controllers/grid/users/stageParticipant/StageParticipantGridHandler.inc.php
 *
 * Copyright (c) 2000-2013 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class StageParticipantGridHandler
 * @ingroup controllers_grid_users_stageParticipant
 *
 * @brief Handle stageParticipant grid requests.
 */

// import grid base classes
import('lib.pkp.controllers.grid.users.stageParticipant.PKPStageParticipantGridHandler');

class StageParticipantGridHandler extends PKPStageParticipantGridHandler {
	/**
	 * Constructor
	 */
	function StageParticipantGridHandler() {
		parent::PKPStageParticipantGridHandler();
	}

	/**
	 * return the app-specific ID for this series.
	 * @return int
	 */
	function _getIdForSubEditorFilter($submission) {
		$seriesId = $submission->getSeriesId();
		return $seriesId;
	}
}

?>