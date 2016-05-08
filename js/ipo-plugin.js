/* ------------------------------------------------------------------------
    IPO Plugin
    
    Developped By: Yinghan Wang
    Version: 1.0
    
    Copyright: Feel free to use it :)
------------------------------------------------------------------------- */

(function( $ ){
    var Ipo = function( wrap ) {
        this.wrap = wrap;
        this.ipoData = null;
        this.getData();
    };

    /**
     * Get data from data file
     */
    Ipo.prototype.getData = function() {
        var me = this,
            location;

        $.ajax({
            url: 'data/ipo-data.json',
            type: 'GET',
            data:'JSON'
        }).done(function( info ){
            location = window.location.search.split('=')[1].trim();

            me.ipoData = info[location];
            me.updateView( me.ipoData );
            
        }).fail(function( err ) { 
            console.log( err );
        });
    };


    /**
     * update view with given data
     * @param {object} data
     * @return this
     */
    Ipo.prototype.updateView = function( data ) {
        var me = this;
        me.createBanner( data.image );
        me.createContent( data.ipoContent );
        me.createExtras( data.extras );
        me.createEntryFee( data.entryFee );
        me.createTable( data.table );
        me.createRules( data.rules );
        me.createMap( data.venue );
        return me;
    };


    Ipo.prototype.createEntryFee = function( entryFee ) {
        var me = this;
        var html = ['<div>'];
        html.push('<h3>Entry Fee:</h3>');
        html.push('<p>' + entryFee + '</p>');
        html.push('</div>');
        this.wrap.append(html.join(''));
    };


    /**
     * creat map
     * @param {obj}
     * @return this
     */
    Ipo.prototype.createMap = function( mapUrl ) {
        var me = this,
            mapCtnr = ['<div>'],
            wrap = this.wrap;

        if(mapUrl) {
            mapCtnr.push(me.getTitle('Venue'));
            mapCtnr.push('<p class="ipo__address">'+mapUrl.address+'</p>');
            mapCtnr.push('<div>' + mapUrl.map +'</div>');
            mapCtnr.push('</div>');
            wrap.append( mapCtnr );
        }
        return me;
    };


    Ipo.prototype.createExtras = function(extras) {
        if(extras || extras !== []){
            var me = this;
            var ln = extras.length;
            var html = [];
            for(var i = 0 ; i < ln ; i++){
                html.push('<div>');

                html.push('<h3>' + extras[i].title + '</h3>');
                html.push('<p>' + extras[i].content + '</p>');

                html.push('</div>');
            }
            me.wrap.append( html.join('') );
        }
    };


    /**
     * create table
     * @param {obj}
     * @return this
     */
    Ipo.prototype.createTable = function( tableInfo ) {
        var me = this,
            ln = tableInfo.length,
            i = 0,
            row,
            j,
            html = ['<h3>Grosvenor IPO Schedule</h3>'];

        html.push([
            '<p>Late Reg for 6 Levels in all Events<br>',
            'All side events are one day events with the exception of APAT Irish Amateur Poker Championships</p>'
        ].join(''));

        html.push('<br><table class="ipo__table">');
        
        html.push('<tr>');    
        for(j in tableInfo[0]) {
            if(tableInfo[0].hasOwnProperty(j)) {
                html.push('<th>' + j + '</th>');
            }
        }
        html.push('</tr>');
        

        for(; i < ln; i += 1 )  {
            html.push('<tr>');
            row = tableInfo[i];
            
            for(j in row) {
                if(row.hasOwnProperty(j)) {
                    html.push('<td>' + row[j] + '</td>');
                }
            }
            html.push('</tr>');
        }
        html.push('</table>');
        this.wrap.append(html.join(''));
        return me;
    };

    Ipo.prototype.staff = function(staffData){

    };

    Ipo.prototype.createBanner = function( src ){
        if(!src) return;
        var me = this;
        html = ['<div class="ipo__banner">'];
        html.push('<img src="' + src + '" />');
        html.push('</div>');
        this.wrap.append(html.join(''));
    };

    Ipo.prototype.createRules = function( rules ){
        var me = this;
        html = ['<div>'];
        html.push(me.getTitle('Rules'));
        html.push('<p>' + rules + '</p>');
        html.push('</div>');
        this.wrap.append(html.join(''));
    };


    /**
     * create content
     * @param {obj}
     * @return this
     */
    Ipo.prototype.createContent = function( content ) {
        var me = this;

        html = ['<div>'];
        html.push('<h3>'+content.title+'</h3>');
        html.push( '<p>' + content.content + '</p>' );
        html.push('</div>');
        this.wrap.append(html.join(''));
        return me;
    };

    Ipo.prototype.getTitle = function( title ){
        return '<h3 class="ipo__title ipo__title--' + title + '"">' + title + '</h3>';
    };


    /**
     * create extras
     * @param {obj}
     * @return this
     */
    Ipo.prototype.createExtra = function( ) {
        var me = this;
        return me;
    };

    var a = new Ipo( $('.ipo__wrapper') );

}( jQuery ));