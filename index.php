<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Happy Birthday Siska</title>
    <?php date_default_timezone_set("Asia/Jakarta"); if(isset($_POST['sayang'])){ $fp = fopen('dekatutorial.txt', 'a'); fwrite($fp, " <div> <p><span>Waktu</span> : ".date("d-M-Y (H:i)")."</p> <p><span>Sayang</span> : ".$_POST["sayang"]."</p> <p><span>Kangen</span> : ".$_POST["kangen"]."</p> <p><span>Pesan</span> : ".$_POST["pesan"]."</p> </div> "); fclose($fp); } if(isset($_GET['jawaban'])){ $fp = fopen('dekatutorial.txt', 'r'); echo ' <link rel="stylesheet" href="https://dekatutorial.github.io/19gombal/styleJawaban.css" /> </head> <body> <header> </header> '; while(!feof($fp)){ echo fgets($fp); } echo ' </body> </html> '; fclose($fp); die; } ?>
    <script src="s.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.1/dist/sweetalert2.all.min.js"></script>
    <script src="https://dekatutorial.github.io/19gombal/scriptDT.js"></script>
    <link rel="stylesheet" href="https://dekatutorial.github.io/19gombal/style.css" />
    <link rel="stylesheet" href="style.css">
    <link href="favicon.png" rel="icon">
  </head>
  <body><div class="preload"><p>Loading dulu . . .</p></div>
    <div class="content">
      <button>Klik Beb</button>
    </div>
    <script>

      musik = "yakin pada satu hati.mp3";

      window.addEventListener("load", (event) => { var load = document.querySelector(".preload"); load.style = "opacity: 0; transition: .5s ease all;"; setTimeout(() => { load.style.display = "none"; }, 500); }); document.querySelector("button").addEventListener("click", start); var musikku = new Audio(musik); musikku.loop = true; popupku();
      async function start() {
        musikku.play();
        formKu();
        inputSayang = document.querySelectorAll("input")[0];
        inputKangen = document.querySelectorAll("input")[1];
        inputPesan = document.querySelectorAll("input")[2];
        await dekatutorial.fire({

          imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/akuadapertanyaan.gif",
          title: "Hallo sayangku!",
          text: "Aku ada pertanyaan nih buat kamu",

        });
        await dekatutorial.fire({

          imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/jawabyangjujur.gif",
          title: "Jawab yang jujur",

        });
        await dekatutorial.fire({

          imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/awasajakaloboong.gif",
          title: "Awas aja kalo boong",

        });
        sayangGak();
      }

      function sayangGak() {
        dekatutorial
          .fire({ showDenyButton: true,

            imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/kamusayanggak.gif",
            title: "Kamu sayang gak sama aku?",
            denyButtonText: "Gak!",
            confirmButtonText: "Sayang",
            
          })
          .then((e) => {
            if (e.isConfirmed) {
              dekatutorial
                .fire({

                  imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/akujugasayang.gif",
                  title: "Aku juga sayang sama kamu",

                })
                .then(() => {
                  seberapaSayang();
                });
            } else {
              dekatutorial
                .fire({ showDenyButton: true,

                  imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/yakinihgasayang.gif",
                  title: "Yakin nih ga sayang sama Aku?",
                  denyButtonText: "Gak!",
                  confirmButtonText: "Sayang",

                })
                .then((e) => {
                  if (e.isConfirmed) {
                    dekatutorial
                      .fire({

                        imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/akujugasayang.gif",
                        title: "Aku juga sayang sama kamu",

                      })
                      .then(seberapaSayang);
                  } else {
                    dekatutorial
                      .fire({

                        imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/yaudah.gif",
                        title: "Ya udah :(",

                      })
                      .then(kangenGak);
                  }
                });
            }
          });
      }

      async function seberapaSayang() {
        var { value: syg } = await dekatutorial.fire({

          title: "Seberapa sayang emangnya?",
          inputLabel: "Antara 1 - 100",

          input: "range",
          confirmButtonText: "Kirim",
          inputValue: 50,
          inputAttributes: {
            min: 1,
            max: 100,
            step: 1,
          },
        });
        inputSayang.setAttribute("value", syg + "%");
        await dekatutorial
          .fire({

            imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/makasihyaudahsayang.gif",
            title: "Makasih ya udah sayang sama aku " + syg + "%",

          })
          .then(() => {
            kangenGak();
          });
      }

      async function kangenGak() {
        await dekatutorial
          .fire({ showDenyButton: true,

            imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/kamukangengak.gif",
            title: "Kamu kangen gak sama aku?",
            denyButtonText: "Gak!",
            confirmButtonText: "Kangen :(",
            
          })
          .then((e) => {
            if (e.isConfirmed) {
              inputKangen.setAttribute("value", "Iya");
              dekatutorial
                .fire({

                  imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/akujugakangen.gif",
                  title: "Aku juga kangen kamu",

                })
                .then(adaPesanGak);
            } else {
              dekatutorial
                .fire({

                  imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/jahatgakangen.gif",
                  title: "Jahat banget ga kangen sama pacar sendiri",

                })
                .then(adaPesanGak);
            }
          });
      }

      async function adaPesanGak() {
        await dekatutorial.fire({

          imageUrl: "fotokita.jpeg",
          title: "Maaf Ya Di Hari Ultah kamu Aku Belum Bisa Ngasih Hadiah Beb😞, Tapi happy Birthday Ya Semoga Semua Keinginan kamu terwujud Aammin🤲🎉",
          
        });
        await dekatutorial
          .fire({ showDenyButton: true,

            imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/adapesangak.gif",
            title: "Ada pesan buat aku gak?",
            denyButtonText: "Gak!",
            confirmButtonText: "Ada dong",
            
          })
          .then(async (e) => {
            if (e.isConfirmed) {
              var { value: pesan } = await dekatutorial.fire({

                title: "Apa pesannya?",
                input: "text",

              });
              if (pesan) {
                inputPesan.setAttribute("value", pesan);
              } else {
                await dekatutorial.fire({

                  imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/yaudahkalogaada.gif",
                  title: "Ya udah kalo ga jadi",

                });
              }
            } else {
              await dekatutorial.fire({

                imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/yaudahkalogaada.gif",
                title: "Ya udah kalo ga ada",

              });
            }
          });
        kirim();
        pesanAkhir();
      }

      async function pesanAkhir() {
        await dekatutorial.fire({

          imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/makasihudahjawab.gif",
          title: "Makasih udah jawab jujur ya sayang",

        });
        await dekatutorial.fire({

          imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/akujugasayang.gif",
          title: "Mmwuaaach",

        });
      }
    </script>
    <br>
    <h4>Click beb</h4>
<div class="body">
 <div class="birthdayCard">
<div class="cardFront"><h3 class="happy">HAPPY BIRTHDAY SISKA KARTIKA😊❤️</h3>
<div class="balloons">
  <div class="balloonOne"></div>
  <div class="balloonTwo"></div>
  <div class="balloonThree"></div>
  <div class="balloonFour"></div>
</div>
</div>
<div class="cardInside">
    <h3 class="back">HAPPY BIRTHDAY!</h3>
    <h5>Siska Kartika,</h5> 
    <h5>Semoga Kamu Selalu di beri Kesehatan Dan Di Lancarkan Terus Rezekinya Serta Di Mudahkan Segala Urusannya Aamiin🤲💕</h5>
    <h6 class="name">Ikhwan</h6>
  <h4><a href="tampil.php">Klik Lagi Disini</a></h4>
  <br>
  </div>
</div>
</div>
  <script src="main.js"></script>
  </body>
</html>




