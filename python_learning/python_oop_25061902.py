class PartyAnimal:      # 定義一個類別 PartyAnimal
    x = 0               # 類別屬性 (class variable)，所有物件共用。但實際會被實例變數蓋掉
    name = ''           # 類別變數，預設是空字串。

    def __init__(self, nam):     # 建構子，當物件建立時自動執行
        self.name = nam          # 將傳入的名字 nam 記錄為物件的屬性 name
        print(self.name, 'constructed')  # 印出建立訊息 

    def party(self):     # 定義一個方法 party
        self.x = self.x + 1     # 將這個物件的 x 屬性增加 1(這裡其實是建立了實例變數 self.x)
        print(self.name, 'party count', self.x)   # 印出目前這個人參加派對的次數

# --- 主程式區塊開始 ---

q = PartyAnimal('Quincy')  # 建立一個 PartyAnimal 的物件，名字是 Quincy, 執行__init__
m = PartyAnimal('Miya')   # 再建立另一個物件 Miya，執行 __init__

q.party()   # 呼叫 q 的 party() 方法:Quincy 的 x+=1, 印出 "Quincy party count 1"
m.party()   # 呼叫 m 的 party() 方法:Miya 的 x+=1, 印出 "Miya party count 1"
q.party()   # 再次呼叫 q 的 party() 方法:Quincy 的 x+=1, 印出 "Quincy party count 2"


# --- 執行結果如下 ---
# Quincy constructed
# Miya constructed
# Quincy party count 1
# Miya party count 1
# Quincy party count 2