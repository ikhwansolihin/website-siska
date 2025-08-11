AOS.init();

var musik = "";

var audio = document.querySelector(".audio");
if (musik) {
  audio.src= musik;
}

function mulai() {
  audio.play();
  window.scrollTo(0, 0);
  document.querySelector(".open").style = "opacity: 0";
  document.querySelector(".body").style = "overflow-y: scroll";
  setTimeout(function() {
    document.querySelector(".open").style.display = "none";
  }, 1200);
}

function wa(isi) {
  window.open("http://api.whatsapp.com/send?text=Makasih%20ya%20udah%20ingat%20Ulang%20Tahun%20Aku,%20Di%20Hari%20Spesial%20Ini%20Aku%20ingin " + isi);
}

async function tanya() {
  var {
    value: kado
  } = await swal.fire({
    imageUrl: 'makeawish.png',
    title: 'Di Hari Spesial Ini, Kamu Ingin Apa?',
    input: 'text',
    showCancelButton: false
  });

  if (kado) {
    await swal.fire({
      imageUrl: 'resources/wa.png',
        title: 'Kirim Jawaban Ke Wa Aku yaa'
    });
    wa(kado);
  } else {
    await swal.fire({
      icon: 'error',
      title: 'Jangan Kosong Dongg'
    });
    tanya();
  }
}