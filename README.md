# ✅ TodoList Uygulaması

Bu proje, kullanıcıların günlük görevlerini kolayca takip edebileceği, sade ve işlevsel bir web tabanlı yapılacaklar listesi (ToDo List) uygulamasıdır. Uygulama tamamen istemci taraflı olarak HTML, CSS ve JavaScript kullanılarak geliştirilmiştir.

---

## 👨‍💻 Geliştirici

**Ceyhun Ege Semercioğlu**  
Öğrenci No: 2111502061  
Bandırma Onyedi Eylül Üniversitesi Bilgisayar Mühendisliği

---

## 🎯 Projenin Amacı

Bu projenin amacı, temel web teknolojilerini kullanarak basit ama etkili bir yapılacaklar listesi (to-do list) uygulaması geliştirmektir. Kullanıcıların günlük görevlerini düzenli bir şekilde takip edebilmeleri için tasarlanmıştır. Proje, yazılım geliştirme sürecinde HTML, CSS ve JavaScript teknolojilerinin nasıl entegre bir şekilde çalıştığını göstermeyi hedefler.

---

## 🧩 Uygulama Özellikleri

- 📝 Görev ekleme  
- ✏️ Görev düzenleme  
- ✅ Görevi tamamlanmış olarak işaretleme  
- 🗑️ Görev silme  
- 💾 Tarayıcı LocalStorage kullanarak veri saklama  
- 📱 Responsive (mobil uyumlu) tasarım  
- 🔁 Sayfa yenilemeden gerçek zamanlı liste güncelleme

---

## 🛠️ Kullanılan Teknolojiler

| Teknoloji | Kullanım Amacı |
|----------|----------------|
| **HTML5** | Sayfa yapısı ve içerik oluşturma |
| **CSS3** | Arayüz tasarımı ve stil uygulama |
| **Vanilla JavaScript** | Sayfa içi etkileşimler ve görev yönetimi |
| **LocalStorage** | Görev verilerinin tarayıcıda kalıcı olarak saklanması |

---

## 🔧 Uygulamanın Çalışma Mantığı

Uygulama, tamamen istemci tarafında çalışır. Kullanıcı görev eklediğinde, bu görev HTML DOM üzerinde listeye eklenir ve eş zamanlı olarak `localStorage` içine kaydedilir. Sayfa her yüklendiğinde, kaydedilmiş görevler `localStorage` üzerinden alınarak sayfaya otomatik olarak yüklenir.

Her görev için şu işlemler desteklenir:

- **Ekleme:** Kullanıcı metin kutusuna görev yazarak ekleyebilir.  
- **Düzenleme:** Var olan görev üzerine tıklanarak metin değiştirilebilir.  
- **Silme:** Sil butonu ile görev listeden ve localStorage’dan silinir.  
- **Tamamlama:** Tamamlandı kutusu işaretlenerek görev işaretlenir.

Bu sayede uygulama basit bir görev yönetim sistemi işlevi görmektedir.

---

## 🔧 Uygulamanın Çalışma Mantığı

Uygulama, tamamen istemci tarafında çalışır. Kullanıcı görev eklediğinde, bu görev HTML DOM üzerinde listeye eklenir ve eş zamanlı olarak `localStorage` içine kaydedilir. Sayfa her yüklendiğinde, kaydedilmiş görevler `localStorage` üzerinden alınarak sayfaya otomatik olarak yüklenir.

---

## 🚀 Lokal Kurulum ve Çalıştırma Adımları (XAMPP ile)

Bu projeyi XAMPP kullanarak kendi bilgisayarınızda çalıştırmak için aşağıdaki adımları takip edin:

### 🔽 1. Adım: Projeyi İndirin

#### Git ile klonlama:

```bash
git clone https://github.com/xantaj/todolist.git
```

veya

#### Zip olarak indirme:

- GitHub sayfasına gidin.
- Sağ üstte bulunan **Code** butonuna tıklayın.
- **Download ZIP** seçeneğini seçin.
- İndirdiğiniz ZIP dosyasını çıkarın.

---

### 📁 2. Adım: Projeyi XAMPP'a Taşıyın

- İndirilen proje klasörünü, `C:/xampp/htdocs/` dizini altına taşıyın.  
  Örnek: `C:/xampp/htdocs/todolist/`

---

### ⚙️ 3. Adım: XAMPP'ı Başlatın

- **XAMPP Control Panel**'i açın.
- **Apache** sunucusunu **Start** butonuna tıklayarak başlatın.

---

### 🌐 4. Adım: Tarayıcıda Uygulamayı Açın

Aşağıdaki URL'yi tarayıcınızda açın:

```
http://localhost/todolist/
```

---

## 📂 Proje Dosya Yapısı

```
todolist/
├── css/
│   └── style.css          # Uygulamanın stil dosyası
├── js/
│   └── script.js          # Etkileşimli JavaScript kodları
├── index.php              # Ana giriş sayfası (XAMPP ile çalıştırılır)
└── README.md              # Bu dokümantasyon dosyası
```

---

## 🔒 Lisans

Bu proje MIT lisansı altında lisanslanmıştır. Daha fazla bilgi için `LICENSE` dosyasına bakabilirsiniz.

---

## ✉️ İletişim

Her türlü görüş ve öneri için benimle iletişime geçebilirsiniz:

- 📧 ceyhunsemercioglu@ogr.bandirma.edu.tr
- GitHub: [xantaj](https://github.com/xantaj)

---

## 📌 Notlar

- Uygulama yalnızca istemci taraflı çalışır. Herhangi bir veritabanı kullanılmamıştır.
- Proje, akademik amaçlarla ve temel web geliştirme becerilerini göstermek amacıyla hazırlanmıştır.
