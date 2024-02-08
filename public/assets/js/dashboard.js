$(document).ready(function(){
    var _lineRegionsEpoch10 = $("#line-regions-epoch10");
    var _lineRegionsEpoch20 = $("#line-regions-epoch20");
    var _lineRegionsEpoch50 = $("#line-regions-epoch50");
    var _lineRegionsEpoch100 = $("#line-regions-epoch100");

    /**
     * Create C3 Line Regions Chart
     * @param {jQuery} id - jQuery object representing the DOM element where the chart will be bound.
     * @param {Array} loss - Array containing data points for loss.
     * @param {Array} accuracy - Array containing data points for accuracy.
     * @param {Object} regions - Object defining regions for the chart.
     */
    var createC3LineRegions = function (id, loss, accuracy, regions) {
        c3.generate({
            bindto: "#" + id.attr('id'),
            data: {
                columns: [loss, accuracy],
                regions: regions,
                colors: { loss: "#039cfd", accuracy: "#1bb99a" }
            }

        });
    }

    // EPOCH 10
    var loss10 = _lineRegionsEpoch10.data("loss10");
    var accuracy10 = _lineRegionsEpoch10.data("accuracy10");
    var regions10 = _lineRegionsEpoch10.data("regions10");
    createC3LineRegions(_lineRegionsEpoch10, loss10, accuracy10, regions10);

    // EPOCH 20
    var loss20 = _lineRegionsEpoch20.data("loss20");
    var accuracy20 = _lineRegionsEpoch20.data("accuracy20");
    var regions20 = _lineRegionsEpoch20.data("regions20");
    createC3LineRegions(_lineRegionsEpoch20, loss20, accuracy20, regions20);

    // EPOCH 50
    var loss50 = _lineRegionsEpoch50.data("loss50");
    var accuracy50 = _lineRegionsEpoch50.data("accuracy50");
    var regions50 = _lineRegionsEpoch50.data("regions50");
    createC3LineRegions(_lineRegionsEpoch50, loss50, accuracy50, regions50);

    // EPOCH 100
    var loss100 = _lineRegionsEpoch100.data("loss100");
    var accuracy100 = _lineRegionsEpoch100.data("accuracy100");
    var regions100 = _lineRegionsEpoch100.data("regions100");
    createC3LineRegions(_lineRegionsEpoch100, loss100, accuracy100, regions100);
});
