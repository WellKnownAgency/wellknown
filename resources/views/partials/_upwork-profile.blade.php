<div class="air-card upwork-font">
	<div class="row m-lg-bottom">
		<div class="col-xs-12 col-sm-8 col-md-9 col-lg-10">
		<div class="media">
			<div class="pull-left">
				<fe-profile-portrait-categories is-blocked="false" is-editable="true" on-profile-portrait-uploaded="vm.onProfilePortraitUploaded(portrait)" portrait="vm.vpd.profile.portrait" username="vm.vpd.profile.shortName" uid="vm.vpd.identity.uid || vm.vpd.identity.recno" class="ng-isolate-scope">
					<div ng-attr-data-user-presence="isEditable() === false" class="ng-isolate-scope">
						<div class="up-active-container ng-isolate-scope up-cursor-pointer" up-highlight-editor="" up-highlight-editor-selector="up-active-context-title" ng-class="{'up-cursor-pointer':isEditable(), 'm-md-top': dragover, 'm-md-right':dragover}" eo-file-drop="onFileDrop($files, $event)">
						<!-- ngIf: !portrait.bigPortrait -->
						<!-- ngIf: portrait.bigPortrait --><img ng-hide="dragover" ng-if="portrait.bigPortrait" ng-click="ui.openEditDialog(portrait)" id="userPortrait" ng-src="https://www.upwork.com/profile-portraits/c1o3jC4RfgzzPv1WDv3hJhcF93SLIKYN2-uytjeHafGP0NuB90Yw8rsF0XVcezFh7t?1561053758054" alt="Taras K." class="avatar avatar-md cfe-avatar m-0 ng-scope" drop-box="" src="https://www.upwork.com/profile-portraits/c1o3jC4RfgzzPv1WDv3hJhcF93SLIKYN2-uytjeHafGP0NuB90Yw8rsF0XVcezFh7t?1561053758054" style=""><!-- end ngIf: portrait.bigPortrait -->
						<!-- ngIf: uid && !isEditable() -->

						</div>
					</div>
				</fe-profile-portrait-categories>
			</div>
			<div class="media-body">
				<h2 class="m-xs-bottom">
				<span itemprop="name" class="ng-binding">
				Taras K.
				</span>
				<!-- ngIf: vm.tnsIDBadge && vm.vpd.profile.idBadgeStatus == 'PASSED' -->
				</h2>
				<div class="fe-profile-header-local-time">
				<fe-profile-map profile-uid="vm.vpd.identity.uid" map-disabled="!vm.isShowMap" class="ng-isolate-scope"><span class="fe-map-trigger">
					<ng-transclude>
						<fe-profile-location-label location="vm.vpd.profile.location" icon-class="m-xs-right" label-class="w-700" view-type="vm.settings.locationViewType" class="ng-scope ng-isolate-scope"><span aria-hidden="true" class="glyphicon " ng-class="iconClass"><i class="fa fa-map-marker air-icon-location m-0-left vertical-align-middle m-xs-right"></i></span>
						<span ng-class="labelClass" class="w-700">
						<!-- ngIf: isCityVisible --><span data-ng-if="isCityVisible" class="ng-binding ng-scope">
						<span itemprop="locality" class="text-capitalize ng-binding">boston</span>,
						</span><!-- end ngIf: isCityVisible -->
						<!-- ngIf: isStateVisible --><span itemprop="state-name" data-ng-if="isStateVisible" class="ng-binding ng-scope">MA</span><!-- end ngIf: isStateVisible -->
						<!-- ngIf: isCountryVisible -->
						</span>
						</fe-profile-location-label>
					</ng-transclude>
				</fe-profile-map><!-- ngIf: !vm.actor.isVisitor() -->
			</div>
		</div>
		</div>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 p-0-left d-none d-sm-block">
			<cfe-job-success vpd="vm.vpd" jss-value="100" class="ng-isolate-scope">
				<div class="d-none d-sm-block">
				<!-- ngIf: $ctrl.showJSS && $ctrl.isJssScorePublic() -->
				<div data-ng-if="$ctrl.showJSS &amp;&amp; $ctrl.isJssScorePublic()" eo-popover="jssTooltipForFreelancer.tmpl.html" eo-popover-placement="left" eo-popover-append-to-body="true" eo-popover-trigger="mouseenter" class="ng-scope" eo-popover-id="122">
					<h3 class="m-0-bottom ng-binding">100%</h3>
					<o-job-success jss-value="100" class="ng-isolate-scope">
						<div class="progress-sm" ng-class="{ 'hide-progress-bar': !showJSS }">
							<div class="progress-bar progress-bar-complimentary" ng-style="{'width': jssWidth+'%'}" style="width: 100%;">
							</div>
						</div>
					</o-job-success>
					<small class="text-muted nowrap upwork-sm">
					Job Success
					</small>
				</div><!-- end ngIf: $ctrl.showJSS && $ctrl.isJssScorePublic() -->
			<!-- ngIf: $ctrl.isJssScorePrivate() -->
			</div>
		</cfe-job-success>
	</div>
</div>
</div>
