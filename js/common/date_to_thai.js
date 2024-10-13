function formatDateToThai(date) {
    const monthsThai = ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน',
        'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'];
    const d = new Date(date);
    const day = d.getDate();
    const month = monthsThai[d.getMonth()];
    const year = d.getFullYear();
    return `${day} ${month} ${year}`;
}