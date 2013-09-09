(function( $ ){
    var obj = {
        elemIdCounter: 0,
        confData:{
        },
        data: {
            itemClass: 'item',
            itemInSummary: 2,
            containerClass: 'expandable',
            readMoreClass: 'readmore',
            readLessClass: 'readless',
            readMoreText: 'Leer más ',
            readLessText: 'Leer menos'
        },

        init : function( options ) {

            var elemId = obj.elemIdCounter++;
            obj.confData[elemId] = $.extend({},obj.data, options);
//            obj.data = $.extend(obj.data, options);

            return this.each(function(){

                var config =  obj.confData[elemId];
                var expandable = $(this);
                expandable.addClass('rmrl-container').attr('rmrl-elemid', elemId);
                var items = expandable.find('.'+config.itemClass);
                if(items.length > config.itemInSummary){
                    expandable.find('.'+config.itemClass).slice(config.itemInSummary).hide();
                    expandable.append("<span class='rmrl-read-more'> <button type='button' href='#' class='"+config.readMoreClass+"'>"+config.readMoreText+"</a> </span>");
                    expandable.append("<span class='rmrl-read-less'> <button type='button' href='#' class='"+config.readLessClass+"'>"+config.readLessText+"</a> </span>");
                    expandable.find('.rmrl-read-more').on('click', obj.showDetails);
                    expandable.find('.rmrl-read-less').on('click', obj.hideDetails).hide();
                }
            });
        },

        showDetails: function(e){
            e.preventDefault();
            var expandable= $(this).parent('.rmrl-container');
            var elemId =  expandable.attr('rmrl-elemid');
            var config = obj.confData[elemId];
            expandable.find('.'+config.itemClass).show();
            expandable.find('.rmrl-read-more').hide();
            expandable.find('.rmrl-read-less').show('slow');
        },

        hideDetails: function(e){
            e.preventDefault();
            var expandable= $(this).parent('.rmrl-container');
            var elemId =  expandable.attr('rmrl-elemid');
            var config = obj.confData[elemId];
//            var expandable= $(this).parent('.'+obj.data.containerClass);
            expandable.find('.'+config.itemClass).slice(config.itemInSummary).hide();
            expandable.find('.rmrl-read-more').show();
            expandable.find('.rmrl-read-less').hide();
        }
    };

    $.fn.readMoreReadLess = function( method ) {

        if ( obj[method] ) {
            return obj[method].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
            return obj.init.apply( this, arguments );
        } else {
            $.error( 'Method ' +  method + ' does not exist on jQuery.readmore-readless' );
        }
    };

})( jQuery );