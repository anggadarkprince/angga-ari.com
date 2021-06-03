export default function () {
    var selectYear = $('select.select-year');
    var selectMonth = $('select.select-month');
    var selectDate = $('select.select-date');

    var currentTotalDate = 31;

    function checkTotalDay() {
        var totalDate = 31;
        if (selectYear.val() !== '' && selectMonth.val() !== '') {
            console.log(selectYear.val());
            totalDate = new Date(selectYear.val(), selectMonth.val(), 0).getDate();
        }

        var diffTotalDate = totalDate - currentTotalDate;

        var i = (totalDate < currentTotalDate ? totalDate : currentTotalDate) + 1;
        var max = totalDate > currentTotalDate ? totalDate : currentTotalDate;

        for (; i <= max; i++) {
            if (diffTotalDate < 0) {
                if (selectDate.hasClass('selectize')) {
                    selectDate[0].selectize.removeOption(i);
                } else {
                    selectDate.find("option[value=" + i + "]").remove();
                }
            } else {
                if (selectDate.hasClass('selectize')) {
                    selectDate[0].selectize.addOption({value: i, text: i});
                    selectDate[0].selectize.refreshOptions();
                } else {
                    selectDate.append("<option value='" + i + "'>" + i + "</option>");
                }
            }
        }
        currentTotalDate = totalDate;
    }

    if (selectYear.length) {
        $('select.select-year').on('change', function () {
            checkTotalDay();
        });
    }

    if (selectMonth.length) {
        $('select.select-month').on('change', function () {
            checkTotalDay();
        });
    }
}