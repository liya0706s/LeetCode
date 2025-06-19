class PartyAnimal:      # 定義一個類別(Class) 叫PartyAnimal，相當於PHP的class宣告
    x = 0               # 類別屬性(class variable)，所有實例共用
    
    def __init__(self):     # __init__ (建構子)，物件建立時自動呼叫
        print('I am constructed')
    
    def party(self):     # 定義一個方法(函式)，當呼叫party()時會執行
        self.x = self.x + 1   # 將 x 屬性加 1 (self 表示這個物件自己的屬性)
        print('So far', self.x)    # 印出目前的 x 值
    
    def __del__(self):     # 解構子:當物件被刪除或變成其他資料型態時，會自動呼叫
        print('I am destructed', self.x)


# --- 以下是主程式區域 ---

an = PartyAnimal()     # 建立一個 PartyAnimal 的物件 an
an.party()             # 呼叫 an 的 party 方法， x 變成 1
an.party()             # 再次呼叫 party 方法， x 變成 2
an = 42            # 將 an 變成整數 42，原本的物件就會被刪除(觸發 __del__)
print('an contains', an)   # 印出 an  目前的內容(現在是整數 42 )