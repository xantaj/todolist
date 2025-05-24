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

## 🚀 Lokal Kurulum ve Çalıştırma Adımları

Bu projeyi kendi bilgisayarınızda çalıştırmak için aşağıdaki adımları takip edebilirsiniz:

### 🔽 1. Adım: Projeyi İndirin

#### Git ile klonlama:

```bash
git clone https://github.com/xantaj/todolist.git
```

veya

#### Zip dosyası olarak indirme:

- GitHub sayfasına gidin.
- Sağ üstte bulunan **Code** butonuna tıklayın.
- **Download ZIP** seçeneğini seçin.
- İndirdiğiniz zip dosyasını çıkarın.

---

### 📁 2. Adım: Proje Klasörüne Girin

İndirdiğiniz veya klonladığınız dosyanın bulunduğu klasöre girin:

```bash
cd todolist
```

---

### 🌐 3. Adım: Uygulamayı Başlatın

Herhangi bir sunucuya ihtiyaç yoktur. Aşağıdaki yöntemlerden biriyle `index.html` dosyasını açmanız yeterlidir:

#### Yöntem 1: Dosyaya çift tıklayın  
- `index.html` dosyasına çift tıklayarak varsayılan tarayıcınızda açabilirsiniz.

#### Yöntem 2: Tarayıcıya sürükleyin  
- `index.html` dosyasını bir web tarayıcısına (Chrome, Firefox, vb.) sürükleyip bırakın.

---

### ✅ 4. Adım: Uygulamayı Kullanın

Artık görev ekleme, silme, düzenleme ve tamamlama işlemlerini gerçekleştirebilirsiniz. Tüm görevleriniz tarayıcınızda güvenli şekilde saklanacaktır.

---

## 📂 Proje Dosya Yapısı

```
todolist/
├── index.html       # Ana HTML sayfası
├── style.css        # Tasarımı sağlayan CSS dosyası
├── script.js        # Tüm etkileşimi sağlayan JavaScript kodları
└── README.md        # Proje açıklama dosyası
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

- Uygulama yalnızca istemci taraflı çalışır. Herhangi bir arka uç (backend) bileşeni içermez.
- Proje, akademik amaçlarla ve temel web geliştirme becerilerini göstermek amacıyla hazırlanmıştır.
