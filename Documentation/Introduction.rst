.. include:: Includes.txt

Introduction
============

Basic idea
----------

…

Example usage
-------------

.. html

	<html xmlns:f="http://typo3.org/ns/TYPO3/CMS/Fluid/ViewHelpers"
    xmlns:tb="Vergissberlin\Thumbor\ViewHelpers"
    data-namespace-typo3-fluid="true">
	<f:layout name="Default" />
	<f:section name="Border">
		<div class="container my-5">
			<div class="alert alert-info">
				VH: <tb:img src="dirk" />
			</div>
		</div>
	</f:section>
	<f:section name="Main">
	</f:section>
	</html>

Credits & Source
----------------

…
