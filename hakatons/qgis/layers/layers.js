var wms_layers = [];
var baseLayer = new ol.layer.Group({
    'title': '',
    layers: [
new ol.layer.Tile({
    'title': 'OSM HOT',
    'type': 'base',
    source: new ol.source.XYZ({
        url: 'http://{a-c}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png',
        attributions: [new ol.Attribution({html: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors,<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>,Tiles courtesy of <a href="http://hot.openstreetmap.org/" target="_blank">Humanitarian OpenStreetMap Team</a>'})]
    })
})
]
});
var format_Prkpuminegadjumi_0 = new ol.format.GeoJSON();
var features_Prkpuminegadjumi_0 = format_Prkpuminegadjumi_0.readFeatures(json_Prkpuminegadjumi_0, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_Prkpuminegadjumi_0 = new ol.source.Vector({
    attributions: [new ol.Attribution({html: '<a href=""></a>'})],
});
jsonSource_Prkpuminegadjumi_0.addFeatures(features_Prkpuminegadjumi_0);var lyr_Prkpuminegadjumi_0 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_Prkpuminegadjumi_0, 
                style: style_Prkpuminegadjumi_0,
                title: '<img src="styles/legend/Prkpuminegadjumi_0.png" /> Pārkāpumi, negadījumi'
            });

lyr_Prkpuminegadjumi_0.setVisible(true);
var layersList = [baseLayer,lyr_Prkpuminegadjumi_0];
lyr_Prkpuminegadjumi_0.set('fieldAliases', {'Notikuma identifikators': 'Notikuma identifikators', 'Notikuma datums un laiks': 'Notikuma datums un laiks', 'Notikuma vieta': 'Notikuma vieta', 'Iesaistīto transportlīdzekļu skaits': 'Iesaistīto transportlīdzekļu skaits', 'To skaitā velosipēdi': 'To skaitā velosipēdi', 'Iesaistīto gājēju skaits': 'Iesaistīto gājēju skaits', 'Bojāgājušo skaits': 'Bojāgājušo skaits', 'Personas ar smagiem miesas bojājumiem': 'Personas ar smagiem miesas bojājumiem', 'Personas ar viegliem miesas bojājumiem': 'Personas ar viegliem miesas bojājumiem', 'Personas bez miesas bojājumiem': 'Personas bez miesas bojājumiem', 'Personu skaits reibumā': 'Personu skaits reibumā', 'Bojāgājušo skaits, kas nav sasnieguši 18 gadus': 'Bojāgājušo skaits, kas nav sasnieguši 18 gadus', 'Personas ar miesas bojājumiem, kas nav sasniegušas 18 gadus': 'Personas ar miesas bojājumiem, kas nav sasniegušas 18 gadus', 'Novads': 'Novads', 'Pilsēta': 'Pilsēta', 'Pagasts': 'Pagasts', 'Ciems': 'Ciems', 'Iela': 'Iela', 'Māja': 'Māja', 'Krustojuma iela': 'Krustojuma iela', 'Krustojuma iela 2': 'Krustojuma iela 2', 'Ceļš': 'Ceļš', 'Km': 'Km', 'Krustojuma ceļš': 'Krustojuma ceļš', 'Krustojuma ceļš 2': 'Krustojuma ceļš 2', 'Piezīmes par adresi': 'Piezīmes par adresi', 'Novada AR kods': 'Novada AR kods', 'Pilsētas AR kods': 'Pilsētas AR kods', 'Pagasta AR kods': 'Pagasta AR kods', 'Ciema AR kods': 'Ciema AR kods', 'Mājas AR kods': 'Mājas AR kods', 'Krustojuma ielas AR kods': 'Krustojuma ielas AR kods', 'Krustojuma ielas 2 AR kods': 'Krustojuma ielas 2 AR kods', 'Krustojuma ceļa AR kods': 'Krustojuma ceļa AR kods', 'Krustojuma ceļa 2 AR kods': 'Krustojuma ceļa 2 AR kods', 'X koordināte': 'X koordināte', 'Y koordināte': 'Y koordināte', });
lyr_Prkpuminegadjumi_0.set('fieldImages', {'Notikuma identifikators': 'TextEdit', 'Notikuma datums un laiks': 'TextEdit', 'Notikuma vieta': 'TextEdit', 'Iesaistīto transportlīdzekļu skaits': 'TextEdit', 'To skaitā velosipēdi': 'TextEdit', 'Iesaistīto gājēju skaits': 'TextEdit', 'Bojāgājušo skaits': 'TextEdit', 'Personas ar smagiem miesas bojājumiem': 'TextEdit', 'Personas ar viegliem miesas bojājumiem': 'TextEdit', 'Personas bez miesas bojājumiem': 'TextEdit', 'Personu skaits reibumā': 'TextEdit', 'Bojāgājušo skaits, kas nav sasnieguši 18 gadus': 'TextEdit', 'Personas ar miesas bojājumiem, kas nav sasniegušas 18 gadus': 'TextEdit', 'Novads': 'TextEdit', 'Pilsēta': 'TextEdit', 'Pagasts': 'TextEdit', 'Ciems': 'TextEdit', 'Iela': 'TextEdit', 'Māja': 'TextEdit', 'Krustojuma iela': 'TextEdit', 'Krustojuma iela 2': 'TextEdit', 'Ceļš': 'TextEdit', 'Km': 'TextEdit', 'Krustojuma ceļš': 'TextEdit', 'Krustojuma ceļš 2': 'TextEdit', 'Piezīmes par adresi': 'Hidden', 'Novada AR kods': 'Hidden', 'Pilsētas AR kods': 'Hidden', 'Pagasta AR kods': 'Hidden', 'Ciema AR kods': 'Hidden', 'Mājas AR kods': 'Hidden', 'Krustojuma ielas AR kods': 'Hidden', 'Krustojuma ielas 2 AR kods': 'Hidden', 'Krustojuma ceļa AR kods': 'Hidden', 'Krustojuma ceļa 2 AR kods': 'Hidden', 'X koordināte': 'Hidden', 'Y koordināte': 'Hidden', });
lyr_Prkpuminegadjumi_0.set('fieldLabels', {'Notikuma identifikators': 'header label', 'Notikuma datums un laiks': 'header label', 'Notikuma vieta': 'header label', 'Iesaistīto transportlīdzekļu skaits': 'inline label', 'To skaitā velosipēdi': 'inline label', 'Iesaistīto gājēju skaits': 'inline label', 'Bojāgājušo skaits': 'inline label', 'Personas ar smagiem miesas bojājumiem': 'inline label', 'Personas ar viegliem miesas bojājumiem': 'inline label', 'Personas bez miesas bojājumiem': 'inline label', 'Personu skaits reibumā': 'inline label', 'Bojāgājušo skaits, kas nav sasnieguši 18 gadus': 'inline label', 'Personas ar miesas bojājumiem, kas nav sasniegušas 18 gadus': 'inline label', 'Novads': 'header label', 'Pilsēta': 'header label', 'Pagasts': 'header label', 'Ciems': 'header label', 'Iela': 'inline label', 'Māja': 'inline label', 'Krustojuma iela': 'inline label', 'Krustojuma iela 2': 'inline label', 'Ceļš': 'inline label', 'Km': 'inline label', 'Krustojuma ceļš': 'inline label', 'Krustojuma ceļš 2': 'inline label', });
lyr_Prkpuminegadjumi_0.on('precompose', function(evt) {
    evt.context.globalCompositeOperation = 'normal';
});