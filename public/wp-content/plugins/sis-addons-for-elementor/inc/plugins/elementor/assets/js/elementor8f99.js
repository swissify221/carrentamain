(function ( $ ) {
	'use strict';

	$( window ).on(
		'elementor/frontend/init',
		function () {
			sisfAddonsElementor.init();
			sisfAddonsElementorPromoWidgets.init();

		}
	);

	var sisfAddonsElementor = {
		init: function () {
			var isEditMode = Boolean( elementorFrontend.isEditMode() );

			if ( isEditMode ) {
				for ( var key in sisfAddonsCore.shortcodes ) {
					for ( var keyChild in sisfAddonsCore.shortcodes[key] ) {
						sisfAddonsElementor.reInitShortcode(
							key,
							keyChild
						);
					}
				}
			}
		},
		reInitShortcode: function ( key, keyChild ) {
			elementorFrontend.hooks.addAction(
				'frontend/element_ready/' + key + '.default',
				function ( e ) {
					// Check if object doesn't exist and print the module where is the error
					if ( typeof sisfAddonsCore.shortcodes[key][keyChild] === 'undefined' ) {
						console.log( keyChild );
					} else if ( typeof sisfAddonsCore.shortcodes[key][keyChild].initSlider === 'function' && e.find( '.sisf-sis-swiper-container' ).length ) {
						var $sliders = e.find( '.sisf-sis-swiper-container' );
						if ( $sliders.length ) {
							$sliders.each(
								function () {
									sisfAddonsCore.shortcodes[key][keyChild].initSlider( $( this ) );
								}
							);
						}
					} else if ( typeof sisfAddonsCore.shortcodes[key][keyChild].initItem === 'function' && e.find( '.sisf-shortcode' ).length ) {
						sisfAddonsCore.shortcodes[key][keyChild].initItem( e.find( '.sisf-shortcode' ) );
					} else {
						sisfAddonsCore.shortcodes[key][keyChild].init();
					}
				}
			);
		},
	};

	var sisfAddonsElementorPromoWidgets = {
		init: function () {
			if ( typeof elementor !== 'undefined' ) {
				elementor.hooks.addFilter(
					'panel/elements/regionViews',
					function ( panel ) {
						var sisWidgetsPromoHandler,
							elementsView   = panel.elements.view,
							categoriesView = panel.categories.view;

						sisWidgetsPromoHandler = {
							
							className: function () {
									var className = 'elementor-element-wrapper';
									if (!this.isEditable() ) {
										className += ' elementor-element--promotion';
										
										if ( this.isSisWidget() ){
											className += ' sisf-element--promotion';
										}
									}
									return className;
							},
							
							isSisWidget: function () {

								if ( undefined !== this.model.get( 'name' ) ) {
									return 0 === this.model.get( 'name' ).indexOf( 'sis_' );
								}
							},

							getElementObj: function ( key ) {

								var widgetObj = elementor.config.promotionWidgets.find(
									function ( widget, index ) {
										if ( widget.name == key ) {
											return true;
										}
									}
								);

								return widgetObj;

							},

							onMouseDown: function () {
								var actionURL = elementor.config.elementPromotionURL.replace(
									'%s',
									this.model.get( 'name' )
								),
								title     = this.model.get( 'title' ),
								content   = sprintf(
									wp.i18n.__(
										'Use %s widget and dozens more pro features to extend your toolbox and build sites faster and better.',
										'sis-addons-for-elementor'
									),
									title
								),
								promotion = elementor.config.promotion.elements;

								if ( this.isSisWidget() ) {
									var widgetObject = this.getElementObj( this.model.get( 'name' ) );
									if ( typeof widgetObject.helpUrl !== 'undefined' ) {
										actionURL = widgetObject.helpUrl;
									}
									
									content = sprintf(
										wp.i18n.__(
											'The %s comes with advanced professional functionalities and an even smoother website-making experience. %s Upgrade SIS Addons for Elementor %s',
											'sis-addons-for-elementor'
										),
										title,
										'<a class="sisf-dialog-box-link" target="_blank" href="https://www.siddhiinfosoft.com/pricing/">',
										'</a>'
									);
								}

								elementor.promotion.showDialog(
									{
										/* translators: %s: Widget Title. */
										title: sprintf(
											wp.i18n.__(
												'%s Widget',
												'sis-addons-for-elementor'
											),
											title
										),
										content: content,
										position: {
											blockStart: '-7'
										},
										targetElement: this.el,
										actionButton: {
											// eslint-disable-next-line @wordpress/valid-sprintf
											url: actionURL,
											text: promotion.action_button.text,
											classes: promotion.action_button.classes || ['elementor-button', 'go-pro']
										}
									}
								);

							}
						};

						panel.elements.view = elementsView.extend(
							{
								childView: elementsView.prototype.childView.extend( sisWidgetsPromoHandler )
							}
						);

						panel.categories.view = categoriesView.extend(
							{
								childView: categoriesView.prototype.childView.extend(
									{
										childView: categoriesView.prototype.childView.prototype.childView.extend( sisWidgetsPromoHandler )
									}
								)
							}
						);

						return panel;
					}
				);
			}
		},
	};

})( jQuery );
