function calculateVoucher(nameVoucher, SpendingMoney) {
    let discountPercent;
    let minSpendingMoney;
    let maxDiscount;
    let discount;
    if (nameVoucher == "DumbWaysJos") {
        discountPercent = 21.1;
        minSpendingMoney = 50000;
        maxDiscount = 20000;
        if ((minSpendingMoney * discountPercent / 100) > 20000) {
            discount = maxDiscount;
        } else {
            discount = minSpendingMoney * discountPercent / 100;
        }
    } else if(nameVoucher == "DumbWaysMantap") {
        discountPercent = 30;
        minSpendingMoney = 80000;
        maxDiscount = 40000;
        if ((minSpendingMoney * discountPercent / 100) > 20000) {
            discount = maxDiscount;
        } else {
            discount = minSpendingMoney * discountPercent / 100;
        }
    } else {
        document.write("Voucher Tidak Dikenali");
    }

    document.write(`Your Money : ${SpendingMoney}<br>`)
    document.write(`You Have To Pay : ${minSpendingMoney}<br>`)
    document.write(`You Get Discount: ${discount}<br>`)
    document.write(`Your Change Money : ${SpendingMoney - minSpendingMoney}`)
}
calculateVoucher("DumbWaysJos", 100000);