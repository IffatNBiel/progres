function tambahStok() {
    // Membuat elemen input untuk mengambil nilai dari form
    let inputId = document.createElement("input");
    let inputNama = document.createElement("input");
    let inputJumlah = document.createElement("input");
    let inputStatus = document.createElement("input");
    let inputDeskripsi = document.createElement("input");
  
    // Mengatur atribut dari elemen input
    inputId.setAttribute("type", "text");
    inputId.setAttribute("placeholder", "ID Produk");
  
    inputNama.setAttribute("type", "text");
    inputNama.setAttribute("placeholder", "Nama Barang");
  
    inputJumlah.setAttribute("type", "number");
    inputJumlah.setAttribute("placeholder", "Jumlah");
  
    inputStatus.setAttribute("type", "text");
    inputStatus.setAttribute("placeholder", "Status");
  
    inputDeskripsi.setAttribute("type", "text");
    inputDeskripsi.setAttribute("placeholder", "Deskripsi");
  
    // Membuat elemen button untuk menambahkan data baru
    let buttonTambah = document.createElement("button");
    buttonTambah.innerHTML = "Tambah";
  
    // Membuat elemen div untuk menampung elemen input dan button
    let div = document.createElement("div");
    div.appendChild(inputId);
    div.appendChild(inputNama);
    div.appendChild(inputJumlah);
    div.appendChild(inputStatus);
    div.appendChild(inputDeskripsi);
    div.appendChild(buttonTambah);
  
    // Menambahkan div ke dalam body
    document.body.appendChild(div);
  
    // Menambahkan event listener pada buttonTambah untuk menambahkan data baru
    buttonTambah.addEventListener("click", function () {
      let table = document.getElementsByTagName("table")[0];
  
      // Membuat elemen row dan cell baru
      let row = table.insertRow(-1);
      let noCell = row.insertCell(0);
      let idCell = row.insertCell(1);
      let namaCell = row.insertCell(2);
      let jumlahCell = row.insertCell(3);
      let statusCell = row.insertCell(4);
      let deskripsiCell = row.insertCell(5);
      let editCell = row.insertCell(6);
  
      // Mengisi nilai dari elemen input ke dalam cell baru
      noCell.innerHTML = table.rows.length - 1;
      idCell.innerHTML = inputId.value;
      namaCell.innerHTML = inputNama.value;
      jumlahCell.innerHTML = inputJumlah.value;
      statusCell.innerHTML = inputStatus.value;
      deskripsiCell.innerHTML = inputDeskripsi.value;
      editCell.innerHTML = '<button onclick="editBarang(this)">Edit</button>';
  
      // Menghapus div setelah data ditambahkan
      div.remove();
    });
  }
  