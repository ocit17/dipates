SELECT a.nomor_induk, a.nama, a.tanggal_masuk, 
CONCAT(FLOOR(PERIOD_DIFF(DATE_FORMAT(NOW(), '%Y%m'), DATE_FORMAT(a.tanggal_masuk, '%Y%m'))/12)) as lama_tahun FROM karyawan a 
LEFT JOIN cuti_karyawan b ON a.nomor_induk=b.nomor_induk ORDER BY lama_tahun DESC


SELECT a.nomor_induk, a.nama, a.tanggal_masuk, 12 - b.lama_cuti as sisa_cuti,
CONCAT(FLOOR(PERIOD_DIFF(DATE_FORMAT(NOW(), '%Y%m'), DATE_FORMAT(a.tanggal_masuk, '%Y%m'))/12)) as lama_tahun FROM karyawan a 
LEFT JOIN cuti_karyawan b ON a.nomor_induk=b.nomor_induk ORDER BY lama_tahun DESC

SELECT a.nomor_induk, a.nama, a.tanggal_masuk, b.lama_cuti as banyak_cuti,12 - b.lama_cuti as sisa_cuti,
DATE_FORMAT(a.tanggal_masuk, '%Y') as tahun FROM karyawan a 
LEFT JOIN cuti_karyawan b ON a.nomor_induk=b.nomor_induk ORDER BY a.tanggal_masuk DESC

1.B 
SELECT a.nomor_induk, a.nama, a.tanggal_masuk, 
CONCAT(FLOOR(PERIOD_DIFF(DATE_FORMAT(NOW(), '%Y%m'), DATE_FORMAT(a.tanggal_masuk, '%Y%m'))/12)) as lama_tahun,
CONCAT(FLOOR(PERIOD_DIFF(DATE_FORMAT(NOW(), '%Y%m'), DATE_FORMAT(a.tanggal_lahir, '%Y%m'))/12)) as usia, 
a.tanggal_lahir 
FROM karyawan a 
LEFT JOIN cuti_karyawan b ON a.nomor_induk=b.nomor_induk ORDER BY usia, lama_tahun DESC