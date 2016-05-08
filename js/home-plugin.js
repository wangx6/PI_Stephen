/* ------------------------------------------------------------------------
    home Plugin
    
    Developped By: Yinghan Wang
    Version: 1.0
    
    Copyright: Feel free to use it :)
------------------------------------------------------------------------- */

(function( $ ){
    var home = function( wrap ) {
        this.wrap = wrap;
        this.homeData = null;
        this.getData();

        console.log(this.wrap);
    };

    /**
     * Get data from data file
     */
    home.prototype.getData = function() {
        var me = this,
            location;

        $.ajax({
            url: 'data/home-data.json',
            type: 'GET',
            data:'JSON'
        }).done(function( info ){
            
            me.homeData = info;
            me.updateView( me.homeData );
            
        }).fail(function( err ) { 
            console.log( err );
        });
    };


    /**
     * update view with given data
     * @param {object} data
     * @return this
     */
    home.prototype.updateView = function( data ) {
        var me = this;
        me.createTable(data.homePageTable);
        return me;
    };


    home.prototype.createTable = function( info ) {
        var me = this;
        var row;
        var html = ['<table class="home__table">'];
        var ln = info.length;
        var i,j;

        html.push('<tr>');
        for(i in info[0]){
            html.push('<th>' + i + '</th>');
        }
        html.push('</tr>');

        for(i = 0; i<ln; i++){
            row = info[i];
            html.push('<tr>');
            for(j in row){
                if(row.hasOwnProperty(j)){
                    html.push('<td>' + row[j] + '</td>');
                }
            }
            html.push('</tr>');
        }

        html.push('</table>');
        this.wrap.append(html.join(''));
    };


    

    var a = new home( $('.home__table__wrapper') );

}( jQuery ));