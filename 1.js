let nama_karyawan, jumlah_besar_gaji, banyak_bulan, tunjangan;

function hitungGaji(nama_karyawan, jumlah_besar_gaji, banyak_bulan, tunjangan){

    let _tunjangan;

    
    if (tunjangan == true) {
        _tunjangan = 500.000;
    } else {
        _tunjangan = 0;
    }
    
    const bpjs = 0.03 *jumlah_besar_gaji;
    const pajak = 0.05 * jumlah_besar_gaji;

    const gajiBersih = jumlah_besar_gaji + _tunjangan + bpjs + pajak;

    const totalGaji = gajiBersih * banyak_bulan;

    console.log('================================================');
    console.log('Nama Karyawan : ' + nama_karyawan);
    console.log('Gaji Pokok : ' + jumlah_besar_gaji);
    console.log('Nama Tunjangan : ' + _tunjangan);
    console.log('BPJS : ' + bpjs);
    console.log('Pajak : ' + pajak);
    console.log('================================================');
    console.log('Gaji Bersih : ' + gajiBersih + '/bulan');
    console.log('================================================');
    console.log('Total Gaji : ' + totalGaji);

}
