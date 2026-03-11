import React from "react";
import { View, Text, Pressable, Linking } from "react-native";
import { personalInfo } from "../data/portfolio";

const contactLinks = [
  {
    icon: "M",
    label: "Email",
    getValue: () => personalInfo.email,
    getUrl: () => `mailto:${personalInfo.email}`,
    color: "bg-rose-50",
    iconColor: "text-rose-500",
    borderHover: "border-rose-200",
  },
  {
    icon: "G",
    label: "GitHub",
    getValue: () => personalInfo.github.replace("https://github.com/", "@"),
    getUrl: () => personalInfo.github,
    color: "bg-slate-100",
    iconColor: "text-slate-700",
    borderHover: "border-slate-300",
  },
  {
    icon: "in",
    label: "LinkedIn",
    getValue: () => personalInfo.linkedin.replace("https://linkedin.com/in/", "@"),
    getUrl: () => personalInfo.linkedin,
    color: "bg-blue-50",
    iconColor: "text-blue-600",
    borderHover: "border-blue-200",
  },
];

export default function Contact() {
  return (
    <View id="contact" className="py-28 bg-white px-6 relative overflow-hidden">
      <View className="absolute bottom-0 right-0 w-72 h-72 dots-pattern opacity-15" />
      <View className="absolute top-20 left-10 w-48 h-48 rounded-full bg-rose-50/30 glow-orb" />

      <View className="max-w-2xl mx-auto items-center">
        <View className="items-center mb-16">
          <View className="bg-slate-100 rounded-full px-4 py-1.5 mb-4">
            <Text className="text-xs font-semibold text-slate-500 tracking-widest uppercase">
              Contacto
            </Text>
          </View>
          <Text className="text-4xl md:text-5xl font-extrabold text-slate-900 text-center tracking-tight mb-4">
            Trabajemos juntos
          </Text>
          <Text className="text-base text-slate-400 text-center max-w-sm leading-relaxed">
            Tienes un proyecto en mente? Estoy disponible para nuevas oportunidades.
          </Text>
        </View>

        <View className="w-full gap-4 mb-10">
          {contactLinks.map((item) => (
            <Pressable
              key={item.label}
              onPress={() => Linking.openURL(item.getUrl())}
              className="contact-card bg-white border-2 border-slate-100 rounded-2xl p-6 flex-row items-center gap-5"
            >
              <View
                className={`w-14 h-14 rounded-2xl ${item.color} items-center justify-center`}
              >
                <Text className={`text-lg font-extrabold ${item.iconColor}`}>
                  {item.icon}
                </Text>
              </View>
              <View className="flex-1">
                <Text className="text-xs text-slate-400 font-semibold uppercase tracking-wider mb-0.5">
                  {item.label}
                </Text>
                <Text className="text-base font-semibold text-slate-800">
                  {item.getValue()}
                </Text>
              </View>
              <View className="w-10 h-10 rounded-xl bg-slate-50 items-center justify-center border border-slate-100">
                <Text className="text-slate-400 text-sm font-mono font-bold">
                  {">"}
                </Text>
              </View>
            </Pressable>
          ))}
        </View>

        {/* CTA button */}
        <Pressable
          onPress={() => Linking.openURL(`mailto:${personalInfo.email}`)}
          className="btn-gradient w-full py-4 rounded-2xl items-center"
        >
          <Text className="text-white font-bold text-sm tracking-wide">
            Enviar mensaje
          </Text>
        </Pressable>
      </View>
    </View>
  );
}
