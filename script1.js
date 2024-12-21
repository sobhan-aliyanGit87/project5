// محاسبه قیمت کل و مبلغ قابل پرداخت
document.getElementById('orderForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // گرفتن تعداد کیسه‌ها و قیمت هر کیسه
    let quantity = document.getElementById('quantity').value;
    let pricePerBag = document.getElementById('price').value;

    // محاسبه قیمت کل
    let totalPrice = quantity * pricePerBag;

    // محاسبه مبلغ قابل پرداخت (برای مثال، اگر تخفیف داریم)
    let amountToPay = totalPrice; // در اینجا تخفیف‌ها می‌توانند اضافه شوند

    // نمایش قیمت کل و مبلغ قابل پرداخت در فیلدهای مربوطه
    document.getElementById('totalPrice').value = totalPrice.toLocaleString();
    document.getElementById('amountToPay').value = amountToPay.toLocaleString();

    // نمایش پیام موفقیت‌آمیز
    Swal.fire({
        title: 'سفارش شما ثبت شد',
        text: `تعداد ${quantity} کیسه به مبلغ ${totalPrice.toLocaleString()} تومان سفارش داده شد. مبلغ قابل پرداخت: ${amountToPay.toLocaleString()} تومان.`,
        icon: 'success',
        confirmButtonText: 'تایید'
    });
});
