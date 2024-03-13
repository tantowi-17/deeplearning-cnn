$(document).ready(function(){
    var _lineRegionsEpoch10 = $("#line-regions-epoch10");
    var _lineRegionsEpoch20 = $("#line-regions-epoch20");
    var _lineRegionsEpoch30 = $("#line-regions-epoch30");
    var _lineRegionsEpoch31 = $("#line-regions-epoch31");
    var _lineRegionsEpoch50 = $("#line-regions-epoch50");
    var _lineRegionsEpoch100 = $("#line-regions-epoch100");
    var _reportGender = $("#report-gender");
    var _reportExpression = $("#report-expression");

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

    /**
     * Create C3 Line Regions Chart
     * @param id - jQuery object representing the DOM element where the chart will be bound.
     * @param loss - Array containing data points for loss.
     * @param accuracy - Array containing data points for accuracy.
     * @param regions - Object defining regions for the chart.
     * @param label - Label for the best epoch point.
     * @param epoch - Best epoch point.
     */
    var createC3LineRegions1 = function (id, loss, accuracy, regions, label, epoch,) {
        var bestEpochPoint = [ label + epoch ];
        for (var i = 1; i <= loss.length; i++) {
            if (i === epoch) {
                bestEpochPoint.push(accuracy[i - 1]);
            } else {
                bestEpochPoint.push(null);
            }
        }

        c3.generate({
            bindto: "#" + id.attr('id'),
            data: {
                columns: [loss, accuracy, bestEpochPoint],
                regions: regions,
                colors: { loss: "#039cfd", accuracy: "#1bb99a", [bestEpochPoint]: "#ff00dd" }
            },
            point: { show: true },
        });
    }

    /**
     * Create C3 Pie
     * @param {jQuery} id - jQuery object representing the DOM element where the chart will be bound.
     * @param {Array} report - Array containing data points for report.
     */
    var createC3Pie = function (id, report) {
        const chart = c3.generate({
            bindto: "#" + id.attr('id'),
            data: {
                columns: report.columns,
                type: "pie",
            },
            axis: {
                x: {
                    type: 'category'
                }
            }
        });
    }

    /**
     * Update C3 cart realtime
     */
    var updateChart = function () {
        $.ajax({
            url: '/reports',
            success: function (data) {
                createC3Pie(_reportExpression, data.gender);
                createC3Pie(_reportExpression, data.expression);
            },
            error: function (xhr, status, error) {
                console.error("Failed to fetch data:", error);
            }
        });
    }
    setInterval(updateChart, 5000);

    // REPORTS
    var _reportGenders = _reportGender.data("report-gender");
    var _reportExpressions = _reportExpression.data("report-expression");
    createC3Pie(_reportGender, _reportGenders);
    createC3Pie(_reportExpression, _reportExpressions);

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

    // EPOCH 30
    var loss30 = _lineRegionsEpoch30.data("loss30");
    var valLoss30 = _lineRegionsEpoch30.data("val-loss30");
    var regions30 = _lineRegionsEpoch30.data("regions30");

    var accuracy30 = _lineRegionsEpoch31.data("accuracy30");
    var valAccuracy30 = _lineRegionsEpoch31.data("val-accuracy30");
    var regions31 = _lineRegionsEpoch31.data("regions31");
    createC3LineRegions1(_lineRegionsEpoch30, loss30, valLoss30, regions30, 'Best Epoch:', 13);
    createC3LineRegions1(_lineRegionsEpoch31, accuracy30, valAccuracy30, regions31, 'Best Epoch:', 16);

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
