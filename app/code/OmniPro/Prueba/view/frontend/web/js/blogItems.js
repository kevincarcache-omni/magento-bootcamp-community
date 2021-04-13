define([
    'uiComponent'
], function(Component) {
    return Component.extend({
        defaults: {
            textoPrueba: 'Texto'
        },
        initialize: function() {
            this._super();
            console.log(this);
            return this;
        }
    });
});