@extends('layout.master')
@section('judul', 'Form Pengisian')
@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			@if ($errors->any())
					<div class="alert alert-danger">
						<strong>Aduhh</strong> ada soal yang ga kejawab, liat angka setelah kode <strong>"j a"</strong> itu nomor soal yang belum di isi sama kamu.<br><br>
						    <ul>
						        @foreach ($errors->all() as $error)
						            <li>{{ $error }} Belum ke isi nih </li>
						        @endforeach
						    </ul>
					</div>
				@endif
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<form action="/uji/{{auth()->user()->id}}/create" method="POST" >
								<div class="panel-heading">
									<h3 class="panel-title">Pengisian Form</h3>
								</div>
								<div class="panel-body">
									 
							        	{{csrf_field()}}
							        	<div class="panel panel-headline">
								<div class="panel-heading">
									<h3 class="panel-title">A.POTENSI TERTULAR DI LUAR RUMAH</h3>
								</div>
								<div class="panel-body">
									{{-- 111 --}}
									<h4><strong>1.</strong> Saya pergi keluar rumah.</h4>
									<label class="fancy-radio">
										<input name="JA1" value="1" type="radio">
										<span><i></i>YA</span>
									</label>
									<label class="fancy-radio">
										<input name="JA1" value="0" type="radio">
										<span><i></i>TIDAK</span>
									</label>
									{{-- 111 --}}


									{{-- 222 --}}
									<h4><strong>2.</strong>  Saya menggunakan transportasi umum seperti angkutan online,angkot,bus,taksi,kereta api.</h4>
									<label class="fancy-radio">
										<input name="JA2" value="1" type="radio">
										<span><i></i>YA</span>
									</label>
									<label class="fancy-radio">
										<input name="JA2" value="0" type="radio">
										<span><i></i>TIDAK</span>
									</label>
									{{-- 222 --}}

									{{-- 333 --}}
									<h4><strong>3.</strong> Saya tidak memakai masker pada saat berkumpul dengan orang lain.</h4>
									<label class="fancy-radio">
										<input name="JA3" value="1" type="radio">
										<span><i></i>YA</span>
									</label>
									<label class="fancy-radio">
										<input name="JA3" value="0" type="radio">
										<span><i></i>TIDAK</span>
									</label>
									{{-- 333 --}}

									{{-- 444 --}}
									<h4><strong>4.</strong> Saya berjabat tangan dengan orang lain.</h4>
									<label class="fancy-radio">
										<input name="JA4" value="1" type="radio">
										<span><i></i>YA</span>
									</label>
									<label class="fancy-radio">
										<input name="JA4" value="0" type="radio">
										<span><i></i>TIDAK</span>
									</label>
									{{-- 444 --}}

									{{-- 555 --}}
									<h4><strong>5.</strong> Saya Tidak Membersihkan tangan dengan hand sanitizer / tissue basah sebelum pegang mobil/motor.</h4>
									<label class="fancy-radio">
										<input name="JA5" value="1" type="radio">
										<span><i></i>YA</span>
									</label>
									<label class="fancy-radio">
										<input name="JA5" value="0" type="radio">
										<span><i></i>TIDAK</span>
									</label>
									{{-- 555 --}}

									{{-- 666 --}}
									<h4><strong>6.</strong> Saya menyentuh benda / uang yang juga disentuh orang lain.</h4>
									<label class="fancy-radio">
										<input name="JA6" value="1" type="radio">
										<span><i></i>YA</span>
									</label>
									<label class="fancy-radio">
										<input name="JA6" value="0" type="radio">
										<span><i></i>TIDAK</span>
									</label>
									{{-- 666 --}}

									{{-- 777 --}}
									<h4><strong>7.</strong> Saya tidak menjaga jarak 1,5 meter dengan orang lain ketika belanja,bekerja,belajar,ibadah.</h4>
									<label class="fancy-radio">
										<input name="JA7" value="1" type="radio">
										<span><i></i>YA</span>
									</label>
									<label class="fancy-radio">
										<input name="JA7" value="0" type="radio">
										<span><i></i>TIDAK</span>
									</label>
									{{-- 777 --}}

									{{-- 888 --}}
									<h4><strong>8.</strong> Saya makan diluar rumah(warung/restaurant).</h4>
									<label class="fancy-radio">
										<input name="JA8" value="1" type="radio">
										<span><i></i>YA</span>
									</label>
									<label class="fancy-radio">
										<input name="JA8" value="0" type="radio">
										<span><i></i>TIDAK</span>
									</label>
									{{-- 888 --}}

									{{-- 999 --}}
									<h4><strong>9.</strong> Saya tidak minum hangat & cuci tangan dengan sabun setelah tiba di tujuan.</h4>
									<label class="fancy-radio">
										<input name="JA9" value="1" type="radio">
										<span><i></i>YA</span>
									</label>
									<label class="fancy-radio">
										<input name="JA9" value="0" type="radio">
										<span><i></i>TIDAK</span>
									</label>
									{{-- 999 --}}

									{{-- 10 --}}
									<h4><strong>10.</strong> Saya berada di wilayah kelurahan tempat pasien tertular.</h4>
									<label class="fancy-radio">
										<input name="JA10" value="1" type="radio">
										<span><i></i>YA</span>
									</label>
									<label class="fancy-radio">
										<input name="JA10" value="0" type="radio">
										<span><i></i>TIDAK</span>
									</label>
									{{-- 10 --}}

								</div>

								<div class="panel-heading">
									<h3 class="panel-title">B.POTENSI TERTULAR DI DALAM RUMAH</h3>
								</div>
								<div class="panel-body">

									{{-- 11 --}}
									<h4><strong>11.</strong> Saya tidak pasang hand sanitizer di depan pintu masuk, untuk bersihkan tangan sebelum pegang (handle) pintu depan rumah.</h4>
									<label class="fancy-radio">
										<input name="JA11" value="1" type="radio">
										<span><i></i>YA</span>
									</label>
									<label class="fancy-radio">
										<input name="JA11" value="0" type="radio">
										<span><i></i>TIDAK</span>
									</label>
									{{-- 11 --}}


									{{-- 12 --}}
									<h4><strong>12.</strong> Saya tidak mencuci tangan dengan sabun setelah tiba di rumah.</h4>
									<label class="fancy-radio">
										<input name="JA12" value="1" type="radio">
										<span><i></i>YA</span>
									</label>
									<label class="fancy-radio">
										<input name="JA12" value="0" type="radio">
										<span><i></i>TIDAK</span>
									</label>
									{{-- 12 --}}


									{{-- 13 --}}
									<h4><strong>13.</strong> Saya tidak menyediakan tissue basah/antiseptic,masker,sabun antiseptic bagi keluarga di rumah.</h4>
									<label class="fancy-radio">
										<input name="JA13" value="1" type="radio">
										<span><i></i>YA</span>
									</label>
									<label class="fancy-radio">
										<input name="JA13" value="0" type="radio">
										<span><i></i>TIDAK</span>
									</label>
									{{-- 13 --}}


									{{-- 14 --}}
									<h4><strong>14.</strong> Saya tidak segera merendam baju & celana bekas pakai di luar rumah kedalam air panas/sabun.</h4>
									<label class="fancy-radio">
										<input name="JA14" value="1" type="radio">
										<span><i></i>YA</span>
									</label>
									<label class="fancy-radio">
										<input name="JA14" value="0" type="radio">
										<span><i></i>TIDAK</span>
									</label>
									{{-- 14 --}}


									{{-- 15 --}}
									<h4><strong>15.</strong>  Saya tidak segera mandi keramas setelah tiba di rumah.</h4>
									<label class="fancy-radio">
										<input name="JA15" value="1" type="radio">
										<span><i></i>YA</span>
									</label>
									<label class="fancy-radio">
										<input name="JA15" value="0" type="radio">
										<span><i></i>TIDAK</span>
									</label>
									{{-- 15 --}}


									{{-- 16 --}}
									<h4><strong>16.</strong> Saya tidak mensosialisasikan check list penilaian resiko pribadi ini kepada keluarga di rumah.</h4>
									<label class="fancy-radio">
										<input name="JA16" value="1" type="radio">
										<span><i></i>YA</span>
									</label>
									<label class="fancy-radio">
										<input name="JA16" value="0" type="radio">
										<span><i></i>TIDAK</span>
									</label>
									{{-- 16 --}}
								</div>


								<div class="panel-heading">
									<h3 class="panel-title">C.DAYA TAHAN TUBUH</h3>
								</div>
								<div class="panel-body">


									{{-- 17 --}}
									<h4><strong>17.</strong> Saya dalam sehari tidak kena cahaya matahari minimal 15 menit.</h4>
									<label class="fancy-radio">
										<input name="JA17" value="1" type="radio">
										<span><i></i>YA</span>
									</label>
									<label class="fancy-radio">
										<input name="JA17" value="0" type="radio">
										<span><i></i>TIDAK</span>
									</label>
									{{-- 17 --}}


									{{-- 18 --}}
									<h4><strong>18.</strong> Saya tidak jalan kaki/ berolah raga minimal 30 menit setiap hari.</h4>
									<label class="fancy-radio">
										<input name="JA18" value="1" type="radio">
										<span><i></i>YA</span>
									</label>
									<label class="fancy-radio">
										<input name="JA18" value="0" type="radio">
										<span><i></i>TIDAK</span>
									</label>
									{{-- 18 --}}


									{{-- 19 --}}
									<h4><strong>19.</strong> Saya jarang minum vitamin C & E, dan kurang tidur.</h4>
									<label class="fancy-radio">
										<input name="JA19" value="1" type="radio">
										<span><i></i>YA</span>
									</label>
									<label class="fancy-radio">
										<input name="JA19" value="0" type="radio">
										<span><i></i>TIDAK</span>
									</label>
									{{-- 19 --}}

									{{-- 20 --}}
									<h4><strong>20.</strong> Usia saya diatas 60 tahun.</h4>
									<label class="fancy-radio">
										<input name="JA20" value="1" type="radio">
										<span><i></i>YA</span>
									</label>
									<label class="fancy-radio">
										<input name="JA20" value="0" type="radio">
										<span><i></i>TIDAK</span>
									</label>
									{{-- 20 --}}

									{{-- 21 --}}
									<h4><strong>21.</strong> Saya mempunyai penyakit jantung/diabetes/gangguan pernafasan kronik.</h4>
									<label class="fancy-radio">
										<input name="JA21" value="1" type="radio">
										<span><i></i>YA</span>
									</label>
									<label class="fancy-radio">
										<input name="JA21" value="0" type="radio">
										<span><i></i>TIDAK</span>
									</label>
									{{-- 21 --}}


								</div>
							
								
									   
								      </div>
							      <button type="submit" class="btn btn-warning btn-block btn-lg">Sudahi Pegetesan Ini</button>
							</form>
							</div>
								</div>
							</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop

